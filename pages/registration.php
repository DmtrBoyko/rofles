<?php
//require_once ('db.php'); #подключаем базу данных
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
    if ("SELECT * FROM users WHERE users.login='$login';") {
        header("Location: register_failed.php");
    }else{
        $insrt = "INSERT INTO users (e_mail, login, password) VALUES ('$email', '$login', '$password');";
        $result = mysqli_query($db_connect, $insrt);
        echo "Данные вставлены";
    }
}
//if (empty($login) || empty($password) || empty($reppswd) || empty($email)) {
//    echo "Заполните все поля!";
//} else {
//    if ($password != $reppswd) {
//        echo "Пароли не совпадают! Попробуйте снова!";
//    } else {
//        $sql = "INSERT INTO users (e-mail, login, password) VALUES (`$email`, `$login`, `$password`);";
//	$result = mysqli_query($db_connect, $sql);
//	if ($result) {
//        if ($db_connect -> query($sql) == TRUE) {
//            echo "Успешная регистрация";
//        } else {
//            echo "Ошибка: " . $db_connect->error;
//        }
//    }
//}
?>
