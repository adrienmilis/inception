FROM debian:buster

LABEL name="amilis" \
        school="19" \
        mail="amilis@student.s19.be"

RUN apt-get -y update \
        && apt-get -y upgrade \
        && apt-get -y install apt-utils \
        && apt-get -y install mariadb-server mariadb-client \
        && chown -R mysql:mysql /var/lib/mysql/

COPY ./my.cnf /etc/mysql/
COPY ./setup.sh /

EXPOSE 3306

CMD ["bash", "/setup.sh"]

# change root password
