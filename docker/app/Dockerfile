FROM ubuntu:18.04

ENV TZ=Europe/Moscow
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update; \
    apt-get install -y software-properties-common curl sudo; \
    add-apt-repository -yn ppa:ondrej/php; \
    curl -sL https://deb.nodesource.com/setup_10.x | sudo bash -; \
    apt-get update; \
    apt-get install -y bash-completion daemonize nano php-pear php-dev php7.3-fpm php7.3-cli nodejs golang ;\
    mkdir -p /run/php; \
    mkdir -p /var/www/app;

RUN pecl install swoole; \
    echo "extension=swoole.so" > /etc/php/7.3/cli/php.ini;

COPY filesystem /

WORKDIR /var/www/app

CMD ["sh", "cmd.sh"]
