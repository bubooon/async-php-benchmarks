#!/bin/bash
pkill php-fpm7.3

daemonize /usr/bin/php7.3 /var/www/app/swoole/index.php
daemonize /usr/bin/node /var/www/app/node/index.js
daemonize /usr/bin/go run /var/www/app/go/index.go

php-fpm7.3 -F -R
