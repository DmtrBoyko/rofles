<?php
//$servername = "localhost:3306";
//$username = "root";
//$passwd = "1234";
//$dbname = "RegUser";

//$db_connect = mysqli_connect($servername, $username, $passwd, $dbname);
$db_connect = mysqli_connect('localhost:3306', 'root', '1234', 'RegUser');
if (!$db_connect) {
    die("Подключиться не удалось", mysqli_connect_error());
    echo "Не могу подключиться к базе данных";
} else {
	echo "Успех";
} ?>
