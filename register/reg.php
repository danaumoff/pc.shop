<?php
include_once '../functions/mysql.php';
$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$rp_password = $_POST['rp_password'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <?php
    if (empty($name) || empty($surname) || empty($surname) || empty($login) || empty($email) || empty($password) || empty($rp_password)) {
        echo "<title>Регистрация - Провал</title>";
    } else if ($rp_password != $password) {
        echo "<title>Регистрация - Провал</title>";
    } else {
        register($name, $surname, $login, $password, $email);
        echo "<title>Регистрация - Успешно</title>";
    }
    ?>

</head>

<body>
    <div>
        <?php
        if (empty($name) || empty($surname) || empty($surname) || empty($login) || empty($email) || empty($password) || empty($rp_password)) {
            echo "Ошибка ввода данных";
            echo "<div><img src='images/cat_2.png' alt='cat'></div>";
        } else if ($rp_password != $password) {
            echo "Пароли не совпадают";
            echo "<div><img src='images/cat_2.png' alt='cat'></div>";
        } else {
            echo "Имя: " . $name . "<br>Фамилия: " . $surname . "<br>Логин: " . $login . "<br>Почта: " . $email . "<br>Пароль: " . $password;
            echo "<div><img src='images/cat.png' alt='cat'></div>";
        }
        ?>
    </div>
    <div>
        <a href='../'><input type='button' value='На главную' id="to_come"></a>
    </div>
</body>

</html>