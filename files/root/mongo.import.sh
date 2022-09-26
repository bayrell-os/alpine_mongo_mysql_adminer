#!/bin/bash

if [ -z "$1" ]; then
    echo "$0 db"
    exit 1
fi

FILE=$1
DB=$2
FILE_NAME=$(basename -- "$FILE")
FILE_EXT="${FILE_NAME#*.}"
TMP_DIR="/tmp/${DB}"

if [ ! -f "$FILE" ]; then
    echo "File $FILE does not exists"
    exit 1
fi

if [ "$FILE_EXT" = "tgz" ] || [ "$FILE_EXT" = "tar.gz" ] || [ "$FILE_EXT" = "tar" ]; then
    
    rm -rf ${TMP_DIR}
    
    mkdir ${TMP_DIR}
    CMD="tar xf $FILE --directory ${TMP_DIR}"
    echo $CMD
    eval $CMD

    CMD="mongorestore --authenticationDatabase admin -u $MONGO_LOGIN -p $MONGO_PASSWORD -h $MONGO_HOST -d $DB ${TMP_DIR}"
    echo $CMD
    eval $CMD
    
    rm -rf ${TMP_DIR}
    
fi
