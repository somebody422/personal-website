FROM debian:buster

RUN apt update
RUN apt install -y apache2 libapache2-mod-php

COPY ./html /var/www/html

CMD ["apachectl", "-D", "FOREGROUND"]
#CMD ["exec", "apachectl", "-D", "FOREGROUND"]


