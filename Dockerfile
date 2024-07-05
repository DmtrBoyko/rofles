FROM php: latest
WORKDIR /
COPY /.idea /.idea
COPY /main.php
CMD [ "php", "/main.php" ]