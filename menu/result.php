<?php
$model = $_GET['pc'];
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>PROgamer - Оплата</title>
</head>

<body>
    <header>
        <img src='images/header.jpg' alt='header' id="header_img">
        <h1>Хочешь крутой ПК?
            <br>Заказывай у нас!
        </h1>
    </header>
    <section>
        <?php
        echo "Вы выбрали " . $model . "<br>";

        if ($model == "Titan") {
            echo "<img src='images/Titan.jpg' id='pc'>";
            echo "К оплате: 350.000 рублей.";
        } else if ($model == "MegaMan") {
            echo "<img src='images/MegaMan.jpeg' id='pc'>";
            echo "К оплате: 280.000 рублей";
        } else if ($model == "From2077") {
            echo "<img src='images/From2077.jpg' id='pc'>";
            echo "К оплате: 220.000 рублей";
        } else if ($model == "NanoPC") {
            echo "<img src='images/NanoPC.jpg' id='pc'>";
            echo "К оплате: 180.000 рублей";
        } else if ($model == "HardGAME") {
            echo "<img src='images/HardGAME.jpg' id='pc'>";
            echo "К оплате: 100.000 рублей";
        } else if ($model == "Standard") {
            echo "<img src='images/Standard.jpg' id='pc'>";
            echo "К оплате: 56.000 рублей";
        } else if ($model == "Standard.v2") {
            echo "<img src='images/Standard.v2.jpg'id='pc'>";
            echo "К оплате: 75.000 рублей";
        }
        ?>

    </section>
</body>

</html>