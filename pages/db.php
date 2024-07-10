<?php
$servername = "localhost";
$username = "dboyko";
$passwd = "1234";
$dbname = "RegUser";

$db_connect = mysqli_connect($servername, $username, $passwd, $dbname);

if (!$db_connect) {
    die("Подключиться не удалось", mysqli_connect_error());
} else {
    echo "Успех";
} ?>