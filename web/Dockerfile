FROM php:apache as buid
RUN apt-get clean && apt-get update; \
    apt-get install -y vim
WORKDIR /var/www/html/
COPY ./web/index.php /var/www/html/
COPY ./web/.well-known /var/www/html/.well-known
# Se instala la extensión PDO para la conexión de PHP con la DB MySQL
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql