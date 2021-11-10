FROM debian:buster

LABEL name="amilis" \
        school="19" \
        mail="amilis@student.s19.be"

RUN apt-get -y update \
        && apt-get -y upgrade \
        && apt-get -y install apt-utils \
        && apt-get -y install wget \
        && apt-get -y install php php-fpm php-mysql php-xml php-gd php-curl php-ssh2 php-mbstring

RUN wget http://wordpress.org/wordpress-5.8.1.tar.gz \
    && mkdir -p /var/www/html/wordpress \
    && tar -xf wordpress-5.8.1.tar.gz -C /var/www/html/ \
    && rm -rf wordpress-5.8.1.tar.gz \
    && chown -R www-data:www-data /var/www/html/wordpress

EXPOSE 9000

CMD ["php"]