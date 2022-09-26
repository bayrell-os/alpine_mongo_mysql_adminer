
MySQL backup:

cd /root
./mysql.dump.sh db_name


MySQL import tar.gz backup:

pv mysql.tgz | tar xOz | mysql -u $MYSQL_LOGIN -h $MYSQL_HOST -p$MYSQL_PASSWORD database


Mongo backup:

cd /root
./mongo.dump.sh db_name


Mongo import:

export MONGO_LOGIN=`echo $MONGO_CONFIG | jq -r '.[0].mongo_login'`
export MONGO_PASSWORD=`echo $MONGO_CONFIG | jq -r '.[0].mongo_password'`
mongorestore --authenticationDatabase admin -u $MONGO_LOGIN -p $MONGO_PASSWORD -h $MONGO_HOST -d database ./database_folder
