FROM debian

RUN apt-get update && apt-get install -y apache2 && apt install -y libapache2-mod-php8.2
RUN apt install -y php8.2-mysql php-xml php-gd php-json php-curl php-mbstring
EXPOSE 80
EXPOSE 443
RUN a2enmod ssl
RUN a2enmod rewrite
#Para dar acceso directo a esa carpeta al entrar al contenedor
WORKDIR /app

ENTRYPOINT ["apache2ctl","-D","FOREGROUND"]

