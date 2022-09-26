
MySQL backup:

cd /shared
/root/mysql.dump.sh db_name


MySQL import tar backup:

pv mysql.tgz | tar xOz | mysql -u $MYSQL_LOGIN -h $MYSQL_HOST -p$MYSQL_PASSWORD database


MySQL import gz backup:

pv mysql.gz | gunzip -c | mysql -u $MYSQL_LOGIN -h $MYSQL_HOST -p$MYSQL_PASSWORD database


Mongo backup:

cd /shared
/root/mongo.dump.sh db_name


Mongo import:

mongorestore --authenticationDatabase admin -u $MONGO_LOGIN -p $MONGO_PASSWORD -h $MONGO_HOST -d database ./database_folder
