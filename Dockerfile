FROM php:7.2

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update
RUN apt-get install -y gnupg gosu curl ca-certificates zip unzip git