<?php
function connectDB()
{
    // установка часового пояса
    date_default_timezone_set('Europe/Moscow');

    // настройки БД
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'pc_shop';

    // подключение к БД и установка кодировки UTF-8
    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_query($link, "SET NAMES 'utf8'");
    mysqli_query($link, "SET CHARACTER SET 'utf8'");
    mysqli_query($link, "SET SESSION collation_connection = 'utf8_general_ci'");
    return $link;
}
function register($name, $surname, $login, $password, $email)
{
    $link = connectDB();
    $query_update = "INSERT INTO users (name, surname, login, password, email) VALUES ('" . mysqli_real_escape_string($link, $name) . 
    "', '" . mysqli_real_escape_string($link, $surname) . "', '" . mysqli_real_escape_string($link, $login) . 
    "', '" . hash("sha3-512", mysqli_real_escape_string($link, $password)) . "', '" . mysqli_real_escape_string($link, $email) . "')";
    mysqli_query($link, $query_update);

}
function auth($login, $password)
{
    $link = connectDB();
    $check_login = mysqli_query($link, "SELECT * FROM users WHERE login = '" . $login . "' AND password = '" . $password . "'");
    for ($users_data = []; $row = mysqli_fetch_assoc($check_login); $users_data[] = $row);
    return $users_data;
}
?>