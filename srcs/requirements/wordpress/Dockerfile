FROM debian:buster

LABEL name="amilis" \
        school="19" \
        mail="amilis@student.s19.be"

RUN apt-get -y update \
        && apt-get -y upgrade \
        && apt-get -y install apt-utils \
        && apt-get -y install wget \
        && apt-get -y install php7.3 php7.3-fpm php7.3-mysql php7.3-xml php7.3-gd php7.3-curl php7.3-ssh2 php7.3-mbstring \
        && service php7.3-fpm start

RUN wget http://wordpress.org/wordpress-5.8.1.tar.gz \
    && mkdir -p /var/www/html/wordpress \
    && tar -xf wordpress-5.8.1.tar.gz -C /var/www/html/ \
    && rm -rf wordpress-5.8.1.tar.gz \
    && chown -R www-data:www-data /var/www/html/wordpress

EXPOSE 9000

CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]