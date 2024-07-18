<?php
?php

require_once 'db.php';

try {
    $pdo = new PDO($attr, $username, $passwd, $opts);
}
catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}





$db_connect = mysqli_connect('localhost', 'root', '1234', 'RegUser');
if (!$db_connect) {
    die ('Подключиться не удалось'. mysqli_connect_error());
    echo "Не могу подключиться к базе данных";
}else{
    echo "Подключился к базе данных";
}

$login = $_POST['login']; #получаем логин с помощью метода POST все как и снизу
$email = $_POST['email'];
$password = $_POST['password'];
$reppswd = $_POST['reppswd'];


if ($password != $reppswd) {
    echo "Пароли не совпадают!";
}else{
    echo "Пароли совпадают";
    $login_check= "SELECT * FROM users WHERE login='$login'";
    $email_check="SELECT * FROM users WHERE e_mail='$email'";
    echo "Проверка прошла";
    if (mysqli_num_rows(mysqli_query($db_connect, $login_check)) > 0) {
        header("Location: login_failed.php");
        echo "Логин уже занят";
    }elseif(mysqli_num_rows(mysqli_query($db_connect, $email_check)) > 0) {
        echo "Логин не занят";
//	$email_check="SELECT * FROM users WHERE e_mail='$email'";
//	if (mysqli_num_rows(mysqli_query($db_connect, $email_check)) > 0) {
	header("Location: email_failed.php");
	echo "email уже занят";
    }else{
        $insrt = "INSERT INTO users (e_mail, login, password) VALUES ('$email', '$login', '$password');";
        $result = mysqli_query($db_connect, $insrt);
        echo "Данные вставлены";
    }
}

?>

