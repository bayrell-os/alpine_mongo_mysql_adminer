
MONGO_LOGIN=`echo $MONGO_CONFIG | jq -r '.[0].mongo_login'`
MONGO_PASSWORD=`echo $MONGO_CONFIG | jq -r '.[0].mongo_password'`
MONGO_HOST=`echo $MONGO_CONFIG | jq -r '.[0].mongo_host'`

export MONGO_HOST
export MONGO_LOGIN
export MONGO_PASSWORD
