#!/bin/bash

/usr/bin/mysqld_safe > /dev/null 2>&1 &
sleep 5
mysql -e "create database skitter;"
mysql -e "use skitter; source /skitter.sql;"
sleep 2
mysqladmin -uroot shutdown

supervisord -n

