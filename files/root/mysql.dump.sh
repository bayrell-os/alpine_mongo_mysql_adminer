#!/bin/bash

if [ -z "$1" ]; then
    echo "$0 db"
    exit 1
fi

DB=$1
TIME=`date +%y%m%d%H%M%S`

CMD="mysqldump -h ${MYSQL_HOST} --user='${MYSQL_LOGIN}' --password='${MYSQL_PASSWORD}' --no-create-db --no-data ${DB} | gzip -c > ${DB}-${TIME}-table.sql.gz"
echo $CMD
eval $CMD

CMD="mysqldump -h ${MYSQL_HOST} --user='${MYSQL_LOGIN}' --password='${MYSQL_PASSWORD}' --no-create-db --no-create-info ${DB} | gzip -c > ${DB}-${TIME}-data.sql.gz"
echo $CMD
eval $CMD
