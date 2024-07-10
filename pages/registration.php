<?php
require_once ('db.php'); #подключаем базу данных
$login = $_POST['login']; #получаем логин с помощью метода POST все как и снизу
$email = $_POST['email'];
$password = $_POST['password'];
$reppswd = $_POST['reppswd'];

if (empty($login) || empty($password) || empty($reppswd) || empty($email)) {
    echo "Заполните все поля!";
} else {
    if ($password != $reppswd) {
        echo "Пароли не совпадают! Попробуйте снова!";
    } else {
        $sql = "INSERT INTO 'users' (e-mail, login, password) VALUES ('$email','$login', '$password')";
        if ($db_connect -> query($sql) == TRUE) {
            echo "Успешная регистрация";
        } else {
            echo "Ошибка: " . $db_connect->error;
        }
    }
}
?>
