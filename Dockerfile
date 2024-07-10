FROM httpd
WORKDIR /
COPY . /var/www/rofles
COPY ./apache2/apache2.conf /etc/apache2/apache2.conf
COPY ./apache2/new_shop.conf /etc/apache2/sites-available/new_shop.conf
#COPY ../../../etc/phpmyadmin /etc/phpmyadmin
RUN apt update
RUN apt install dpkg -y
#RUN apt-get install php -y
RUN apt install libapache2-mod-php -y
#RUN cp /etc/apache2 /etc/apache2
#RUN cp /etc/phpmyadmin /etc/phpmyadmin
CMD [ "php", "/var/www/rofles/pages/main.php" ]
