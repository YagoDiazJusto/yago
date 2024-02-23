FROM debian:latest 
RUN apt-get update && apt-get install -y apache2

ENTRYPOINT ["apachectl","-D","FOREGROUND"]