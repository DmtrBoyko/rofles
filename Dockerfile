FROM nginx
WORKDIR /
RUN apt update
RUN apt-get install php -y
COPY . /var/www/new_site/
#COPY /etc/nginx/sites-enabled /etc/nginx/sites-enabled
#RUN wget https://www.php.net/distributions/php-8.3.9.tar.gz /]
#RUN cd /
#RUN tar -xzvf php-8.3.9.tar.gz
CMD [ "/var/www/new_site/pages/main.html" ]
