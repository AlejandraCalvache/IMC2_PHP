
# Utilizar una imagen base de PHP con Apache
FROM php:7.4-apache

# Copiar los archivos de la aplicación al directorio raíz de Apache
COPY index.php /var/www/html/
COPY style.css /var/www/html/

# Exponer el puerto 80 para que la aplicación sea accesible
EXPOSE 80