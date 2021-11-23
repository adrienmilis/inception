FROM debian:buster

LABEL name="amilis" \
        school="19" \
        mail="amilis@student.s19.be"

RUN apt-get -y update \
        && apt-get -y upgrade \
        && apt-get -y install apt-utils \
        && apt-get -y install wget \
        && apt -y install lsb-release apt-transport-https ca-certificates \
        && wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg \
        && echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list \
        && apt-get -y update \
        && apt-get -y install php7.4 php7.4-fpm php7.4-mysql php7.4-xml php7.4-gd php7.4-curl php7.4-ssh2 php7.4-mbstring \
        && mkdir /run/php

COPY ./www.conf /etc/php/7.4/fpm/pool.d/

EXPOSE 9000

CMD ["/usr/sbin/php-fpm7.4", "--nodaemonize"]