FROM httpd
WORKDIR /
COPY . /var/www/new_shop
#COPY ../../../etc/phpmyadmin /etc/phpmyadmin
RUN apt update
RUN apt-get install php -y
RUN apt install libapache2-mod-php
RUN cp /etc/apache2 /etc/apache2
RUN cp /etc/phpmyadmin /etc/phpmyadmin
CMD [ "php", "/var/www/new_shop/pages/main.php" ]
