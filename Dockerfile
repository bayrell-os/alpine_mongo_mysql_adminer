ARG ARCH=amd64
FROM docker.io/bayrell/virtual_space:0.4.3-${ARCH}

RUN cd ~; \
	rm -rf /var/www/html; \
	rm -rf /etc/nginx/sites-enabled/99-app.conf; \
	echo 'Ok'

ADD files /
RUN cd ~; \
	chmod +x /root/*.sh; \
	echo 'Ok'