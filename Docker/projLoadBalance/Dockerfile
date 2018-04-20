#LOADBAL
FROM nginx:1.13

MAINTAINER mxs3419 <mxs3419@g.rit.edu>

RUN apt-get update

COPY index.html /usr/share/nginx/html/index.html
RUN rm /etc/nginx/conf.d/*
ADD nginx.conf /etc/nginx/
