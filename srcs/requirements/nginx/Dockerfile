FROM debian:buster

LABEL name="amilis" \
        school="19" \
        mail="amilis@student.s19.be"

RUN apt-get -y update \
        && apt-get -y upgrade \
        && apt-get -y install apt-utils \
        && apt-get -y install nginx \
        && apt-get -y install openssl \
        && openssl req -x509 -nodes -days 365 -subj "/C=BE/ST=BXL/O=19, Inc./CN=localhost" -addext "subjectAltName=DNS:localhost" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt

ADD ./default /etc/nginx/sites-available/

EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]
