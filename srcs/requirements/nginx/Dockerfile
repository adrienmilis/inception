FROM debian:buster

LABEL name="amilis" \
        school="19" \
        mail="amilis@student.s19.be"

RUN apt-get -y update \
        && apt-get -y install nginx

# # ADD nginx config file
# RUN rm /etc/nginx/sites-available/default \
#         && rm /var/www/html/index.nginx-debian.html
# ADD srcs/default_autoindex_on /etc/nginx/sites-available/default

EXPOSE 80


CMD ["nginx", "-g", "daemon off;"]
