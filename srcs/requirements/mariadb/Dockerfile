FROM debian:buster

LABEL name="amilis" \
        school="19" \
        mail="amilis@student.s19.be"

RUN apt-get -y update \
        && apt-get -y upgrade \
        && apt-get -y install mariadb-server mariadb-client \
        && service mysql start

ADD ./create_wordpress_db.sql /
RUN mysql < /create_wordpress_db.sql \
        && rm -rf /create_wordpress_db.sql

EXPOSE 3306

CMD ["mysqld"]

# our wordpress database needs 2 users, one being the admin