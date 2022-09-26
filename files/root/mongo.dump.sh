#!/bin/bash

if [ -z "$1" ]; then
    echo "$0 db"
    exit(1)
fi

$DB=$1
$TIME=`date +%y-%m-%d-%H%M%S`

MONGO_LOGIN=`echo $MONGO_CONFIG | jq -r '.[0].mongo_login'`
MONGO_PASSWORD=`echo $MONGO_CONFIG | jq -r '.[0].mongo_password'`

CMD="mongodump -h ${MONGO_HOST} -u ${MONGO_LOGIN} -p ${MONGO_PASSWORD} --authenticationDatabase admin --db ${DB} --out ${DB}-${TIME}"
echo $CMD
eval $CMD

CMD="tar -zcf ${DB}-${TIME}.tgz ${DB}-${TIME}"
echo $CMD
eval $CMD

CMD="rm -f ${DB}-${TIME}/"
eval $CMD
