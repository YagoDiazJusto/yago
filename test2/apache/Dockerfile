FROM debian:latest

RUN apt update && apt install -y apache2 

EXPOSE 80
EXPOSE 443
#CMD se puede sobreescribir con command en el compose el entrypoint nunca
ENTRYPOINT ["apachectl","-D","FOREGROUND"]

