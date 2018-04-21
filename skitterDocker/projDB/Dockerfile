#DB
FROM mysql:latest

COPY skitter.sql /tmp/


RUN /bin/bash -c "/usr/bin/mysqld_safe --skip-grant-tables &" && \
  sleep 5 && \
  mysql -u root -e "CREATE DATABASE skitter" && \
  mysql -u root skitter < /tmp/skitter.sql

EXPOSE 3306