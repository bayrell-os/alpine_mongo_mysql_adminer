#!/bin/bash

if [ -z "$1" ]; then
    echo "$0 db"
    exit(1)
fi

$DB=$1
$TIME=`date +%y-%m-%d-%H%M%S`

CMD="mysqldump -h ${MYSQL_HOST} --user='${MYSQL_USERNAME}' --password='${MYSQL_PASSWORD}' --databases ${DB} > ${DB}-${TIME}.sql"
echo $CMD
eval $CMD

CMD="tar -zcf ${DB}-${TIME} ${DB}-${TIME}.sql"
echo $CMD
eval $CMD

CMD="rm -f ${DB}-${TIME}.sql"
eval $CMD

