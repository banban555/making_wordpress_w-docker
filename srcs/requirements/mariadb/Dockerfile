FROM    debian:buster

RUN     apt-get update -y && apt-get upgrade -y
RUN     apt-get install mariadb-server -y

COPY	tools/mariadb_setting.sh /mariadb_setting.sh
COPY	./conf/my.cnf /etc/mysql/my.cnf
COPY    ./conf/wp_backup.sql ./

ENTRYPOINT    ["sh", "./mariadb_setting.sh"]

EXPOSE 3306