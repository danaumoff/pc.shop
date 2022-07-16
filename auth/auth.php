<?php
include_once '../functions/mysql.php';
$login = $_POST['login'];
$password = hash("sha3-512", $_POST['password']);
$user = auth($login, $password);
if (empty($user[0]["name"]))
{
    echo "<meta http-equiv='refresh' content='0;index.html'>";
    
}
else {
    session_start();
    $_SESSION["logged_in"] = true;
    $_SESSION["name"] = $user[0]["name"];
    echo "<meta http-equiv='refresh' content='0;../menu/index.php'>";
}
?>
