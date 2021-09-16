FROM debian:buster

RUN apt update
RUN apt install -y apache2 libapache2-mod-php

COPY ./html /var/www/html
COPY ./docker/web-server/apache/dir.conf /etc/apache2/mods-enabled/dir.conf

CMD ["apachectl", "-D", "FOREGROUND"]
#CMD ["exec", "apachectl", "-D", "FOREGROUND"]


