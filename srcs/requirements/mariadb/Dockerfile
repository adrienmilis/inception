FROM debian:buster

LABEL name="amilis" \
        school="19" \
        mail="amilis@student.s19.be"

ADD ./create_wordpress_db.sql /

RUN apt-get -y update \
        && apt-get -y upgrade \
        && apt-get -y install apt-utils \
        && apt-get -y install mariadb-server mariadb-client \
        && service mysql start \
        && chown -R mysql:mysql /var/lib/mysql/ \
        && mysql < /create_wordpress_db.sql \
        && rm -rf /create_wordpress_db.sqls

EXPOSE 3306

CMD ["mysqld"]

# our wordpress database needs 2 users, one being the admin