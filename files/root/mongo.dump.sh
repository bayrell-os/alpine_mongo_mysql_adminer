#!/bin/bash

if [ -z "$1" ]; then
    echo "$0 db"
    exit 1
fi

DB=$1
TIME=`date +%y%m%d%H%M%S`
TMP_DIR="/tmp/${DB}"

CMD="rm -rf ${TMP_DIR}"
eval $CMD

CMD="mongodump -h ${MONGO_HOST} -u ${MONGO_LOGIN} -p ${MONGO_PASSWORD} --authenticationDatabase admin --db ${DB} --out ${TMP_DIR}"
echo $CMD
eval $CMD

CMD="tar -C ${TMP_DIR}/${DB} -zcf ${DB}-${TIME}.tgz ."
echo $CMD
eval $CMD

CMD="rm -rf ${TMP_DIR}"
eval $CMD
