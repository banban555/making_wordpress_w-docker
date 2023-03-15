FROM    debian:buster

RUN     apt-get update -y 
RUN     apt-get upgrade -y 
RUN     apt-get install -y nginx
RUN     apt-get install -y openssl

COPY    conf/default /
RUN     mv default /etc/nginx/sites-available/default

RUN     openssl genrsa -out server.key 4096 
RUN     openssl req -new -key server.key -subj "/C=KR/ST=Seoul/O=42Seoul/OU=Shin" -out server.csr
RUN     openssl req -x509 -in server.csr -key server.key -out server.crt
RUN     mv server.crt /etc/ssl/certs/
RUN     mv server.csr server.key /etc/ssl/private

ENTRYPOINT     ["nginx", "-g", "daemon off;"]

EXPOSE 443