<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New_shop</title>
    <link rel="stylesheet" href="../style/mystyle.css">
</head>
<body>
<header>
    <a href="main.html"><h2>New_shop - найди всё, что хочешь</h2></a>
    <a href="registration.html"><h4>Регистрация</h4></a>
    <nav class="menu">
        <ul>
            <li><a href="./pages/catalog.html"> Каталог</a></li>
            <ul class="submenu">
                <li><a href="./pages/catalog.html">Компьютеры</a></li>
                <li><a href="./pages/catalog.html">Бытовая техника</a></li>
                <li><a href="./pages/catalog.html">Кровати</a></li>
            </ul>
            <li><a href="./pages/catalog.html">Новости</a></li>
            <li><a href="./pages/catalog.html">О нас</a></li>
        </ul>
    </nav>
</header>
<br>
<form action="registration.php" method="post"></form>>
    <div class="registration">
        Придумайте логин: <br>
        <input class="registration_input" type="text" name="login" placeholder="Логин" required><br>
        Введите свою электронную почту:<br>
        <input class="registration_input" type="email" name="email" placeholder="Электронная почта" required><br>
        Придумайте пароль:<br>
        <input class="registration_input" type="password" name="password" placeholder="Пароль" required><br>
        Повторите придуманный пароль:<br>
        <input class="registration_input" type="password" name="reppswd" placeholder="Повторите пароль" required><br>
        <div class="accept/reset"></div>
            <button type="submit">
                Принять
            </button>
            <button type="reset">
                Сбросить введенные данные
            </button>
        </div>
    </div>
</form>
</body>
</html>