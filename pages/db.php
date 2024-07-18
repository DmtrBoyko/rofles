<?php
$servername = 'localhost';
$username = 'root';
$passwd = '1234';
$dbname = 'RegUser';
$chrs = 'utf8mb4';
$attr = "mysql:host=$servername;dbname=$dbname,charset=$chrs";
//l = [
//    PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
//    PDO::ATTR_EMULATE_PREPARES    => false,
//];

//$db_connect = mysqli_connect($servername, $username, $passwd, $dbname);
//$db_connect = mysqli_connect('localhost:3306', 'root', '1234', 'RegUser');
//if (!$db_connect) {
//    die("Подключиться не удалось", mysqli_connect_error());
//    echo "Не могу подключиться к базе данных";
//} else {
//	echo "Успех";
//}
?>
