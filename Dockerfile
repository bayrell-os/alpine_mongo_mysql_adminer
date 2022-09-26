ARG ARCH=amd64
FROM docker.io/bayrell/virtual_space:0.4.3-${ARCH}

RUN cd ~; \
	apk update; \
	apk add jq mysql-client mongodb-tools; \
	rm -rf /var/cache/apk/*; \
	rm -rf /var/www/html; \
	rm -rf /etc/nginx/sites-enabled/99-app.conf; \
	echo 'Ok'

ADD files /
RUN cd ~; \
	echo ". /etc/profile" > /root/.profile; \
	echo ". /etc/profile" > /root/.bashrc; \
	chmod +x /root/*.sh; \
	echo 'Ok'