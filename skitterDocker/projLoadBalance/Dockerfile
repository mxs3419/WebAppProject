#LOADBAL
FROM nginx:1.13

MAINTAINER mxs3419 <mxs3419@g.rit.edu>

RUN apt-get update

RUN rm /etc/nginx/conf.d/*
ADD nginx.conf /etc/nginx/
