FROM php:8.3.10
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update && apt-get install -y libpq-dev 
RUN apt-get install -y sqlite3 libsqlite3-dev

WORKDIR /app
COPY . /app
RUN composer install
CMD php artisan migrate:fresh --seed && php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000