#!/bin/bash

if [ -z "$1" ] || [ -z "$2" ]; then
    echo "$0 file db"
    exit 1
fi

FILE=$1
DB=$2
FILE_NAME=$(basename -- "$FILE")
FILE_EXT="${FILE_NAME#*.}"

if [ ! -f "$FILE" ]; then
    echo "File $FILE does not exists"
    exit 1
fi

if [ "$FILE_EXT" = "gz" ]; then
    
    CMD="pv $FILE | gunzip -c | mysql -u $MYSQL_LOGIN -h $MYSQL_HOST -p$MYSQL_PASSWORD $DB"
    echo $CMD
    eval $CMD
    
fi

if [ "$FILE_EXT" = "tgz" ] || [ "$FILE_EXT" = "tar.gz" ] || [ "$FILE_EXT" = "tar" ]; then
    
    CMD="pv $FILE | tar xOz | mysql -u $MYSQL_LOGIN -h $MYSQL_HOST -p$MYSQL_PASSWORD $DB"
    echo $CMD
    eval $CMD
    
fi
