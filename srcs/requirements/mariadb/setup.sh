#!/bin/bash

echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$ROOT_PASS';" > /var/lib/mysql/pass-reset.txt
mysqld_safe --init-file=/var/lib/mysql/pass-reset.txt


