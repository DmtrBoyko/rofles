<?php

$fileconn = require_once 'db.php';
if ($fileconn) {
    echo "Подключение к БД может произойти ";
} else {
    echo "Подключение к БД не может произойти ";
}

try {
    $pdo = new PDO($attr, $username, $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Не удалось подключиться к БД: " . $e->getMessage());
}

$login = $_POST['login']; #получаем логин с помощью метода POST все как и снизу
$email = $_POST['email'];
$password = $_POST['password'];
$reppswd = $_POST['reppswd'];

function check_passwords($param1, $param2) 
{
    if ($param1 == $param2) {
         echo "Пароли совпадают!";
         return true;
    } else {
         echo "Пароли не совпадают";
         return false;
    }
} 

function check_login($param1, $param2) 
{
   $login_check = $param2->query("SELECT COUNT(*) FROM users WHERE login='$param1'");
   echo "Запрос к бд логин выполнен";
   $number_of_logins = $login_check->fetchColumn();
   echo "$number_of_logins";
   if ($number_of_logins == 0) {
       echo "Данный логин свободен!";
       return true;
   }else{
       echo "Данный логин уже занят другим пользователем! Придумайте другой логин. ";
       return false;
   }
}

function check_email($param1, $param2) 
{
   $email_check = $param1->query("SELECT COUNT(*) FROM users WHERE e_mail='$param2'");
   $number_of_emails = $email_check->fetchColumn();
   echo "$number_of_emails";
   if ($number_of_emails == 0) {
        echo "Данная почта свободна!";
        return true;
   } else {
        echo "Данная почта уже использована для регистрации";
        return false;
   }
} 

function insert_data_into_db($param1, $param2, $param3, $param4) {
    $insrt = "INSERT INTO users (e_mail, login, password) VALUES ('$param2', '$param3', '$param4');";
    $result = $param1->query($insrt);
    echo "Регистрация прошла успешно!";
}

if (check_passwords($password, $reppswd)) {
    echo "Пароли совпадают";
    if (check_login($login, $pdo)) {
       echo "Данный логин свободен"; 
       if (check_email($pdo, $email)) {
           echo "Данная почта свободна!";
	   insert_data_into_db($pdo, $email, $login, $password);
       } else {
           echo "Почта занята!";
           header("Location: email_failed.php");
       }
    } else {
      echo "Данный логин занят";
      header("Location: login_failed.php");
    }
} else {
   echo "Не совпадают";
   header("Location: different_passwords.php");
}

//echo "$password" . "$reppswd";
?>

