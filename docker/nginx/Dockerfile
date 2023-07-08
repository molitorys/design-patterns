FROM nginx:latest

WORKDIR /etc/nginx/conf.d

COPY docker/nginx/nginx.conf .

RUN mv nginx.conf default.conf

EXPOSE 80
EXPOSE 443