FROM httpd
WORKDIR /
#COPY /etc/apache2/sites-enabled/new_shop.conf /etc/apache2/sites-enabled/new_shop.conf
#COPY /etc/apache2/sites-available/new_shop.conf /etc/apache2/sites-available/new_shop.conf
#COPY /etc/apache2/ports.conf /etc/apache2/ports.conf
COPY . /var/www/new_shop
RUN apt update
RUN apt-get install php -y
#COPY /etc/apache2/apache2.conf /etc/apache2/apache2.conf
#COPY /etc/nginx/sites-enabled /etc/nginx/sites-enabled
#RUN wget https://www.php.net/distributions/php-8.3.9.tar.gz /]
#RUN cd /
#RUN tar -xzvf php-8.3.9.tar.gz
CMD [ "php", "/var/www/new_shop/pages/main.html" ]
