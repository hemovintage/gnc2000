FROM php:8.1.0-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar archivos del proyecto al contenedor
COPY . /var/www/html/

# Configurar el servidor Apache
RUN a2enmod rewrite

# Exponer el puerto 82 para que el servidor web sea accesible desde el host
EXPOSE 82

# Cambiar el puerto de escucha del servidor web
RUN sed -i 's/Listen 80/Listen 82/g' /etc/apache2/ports.conf
RUN sed -i 's/VirtualHost \*:80/VirtualHost \*:82/g' /etc/apache2/sites-available/000-default.conf
