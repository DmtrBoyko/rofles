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
//catch (PDOException $e) {
//    throw new PDOException($e->getMessage(), (int)$e->getCode());
//}


//$db_connect = mysqli_connect('localhost', 'root', '1234', 'RegUser');
//    if (require_once 'db.php') {
//    die ('Подключиться не удалось'. mysqli_connect_error());
//    echo "Подключился к БД";
//}else{
//    echo "Не подключился к базе данных";
//}

$login = $_POST['login']; #получаем логин с помощью метода POST все как и снизу
$email = $_POST['email'];
$password = $_POST['password'];
$reppswd = $_POST['reppswd'];


if ($password != $reppswd) {
   echo "Пароли не совпадают!";
}else{
   echo "Пароли совпадают"; 
   $login_check =$pdo->query("SELECT COUNT(*) FROM users WHERE login='$login'");
   $number_of_logins = $login_check->fetchColumn();
   echo "$number_of_logins";
   if ($nubmer_of_logins != 0) {
       echo "Данный логин уже занят другим пользователем! Придумайте другой логин. ";
   }else{
       echo "Данный логин свободен!";
//   $login_check = $pdo->prepare("SELECT COUNT(*) FROM users WHERE login='$login'");
//   echo "Запрос подготовлен";
//   $login_check->execute();
//   echo "Запрос выполнен";
//   $login_rows=$login_check->fetchColumn();
//   echo "$login_rows";
       $insrt = "INSERT INTO users (e_mail, login, password) VALUES ('$email', '$login', '$password');";
       $result = $pdo->query($insrt);
       echo "Данные вставлены";
    }
} 
/*
   // $email_check="SELECT count (*) as number_of_emails FROM users WHERE e_mail='$email'";
    if ($login_check > 0) {
	echo "Логин занят";
    }else{
	echo "Логин свободен" }
} 
        header("Location: login_failed.php");
        echo "Логин уже занят";
    }elseif($pdo->query($login_check) = 0) {
        echo "Логин не занят";
    }
}
//	$email_check="SELECT * FROM users WHERE e_mail='$email'";
	if ($pdo->query($email_check) > 0) {
	header("Location: email_failed.php");
	echo "email уже занят";
    }else{ */
//   $insrt = "INSERT INTO users (e_mail, login, password) VALUES ('$email', '$login', '$password');";
//   $result = $pdo->query($insrt);
//   echo "Данные вставлены";
//}
//}

?>

