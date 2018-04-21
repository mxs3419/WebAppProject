#WEB1
FROM php:7.0-apache


ENV DEBIAN_FRONTEND noninteractive
ENV INITRD No

#RUN apt-get update && apt install -y supervisor apache2 php libapache2-mod-php\
#    php-curl php-gd php-cli php-mysql php-xml php-mbstring software-properties-common vim

RUN docker-php-ext-install mysqli


RUN rm -rf /var/www/html
COPY html/ /var/www/html


EXPOSE 80
