<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>PROgamer</title>
</head>

<body>
    <header>
        <img src='images/header.jpg' alt='header' id="header_img">
        <h1>Хочешь крутой PC?
            <br>Заказывай у нас!
        </h1>
    </header>
    <section>
        <?php
        if ($_SESSION["logged_in"]) {


        ?>
            <form action="result.php" method="GET">
                <p>Привет, <?= $_SESSION["name"] ?></p>
                <select name="pc">
                    <option value="Titan">Titan - RTX3090, i9-10900k, 64GB - ОЗУ</option>
                    <option value="MegaMan">MegaMan - RTX3070, i9-10200k, 32GB - ОЗУ</option>
                    <option value="From2077">From2077 - RTX2070 SUPER, i9-8700k, 32GB - ОЗУ + Cyberpunk2077 в подарок</option>
                    <option value="NanoPC">NanoPC - GTX2080, i7-9700k, 16GB - ОЗУ</option>
                    <option value="HardGAME">HardGAME - GTX2070, i7-7700k, 16GB - ОЗУ</option>
                    <option value="Standard">Standard - GTX1060, i3-7100k, 16GB - ОЗУ</option>
                    <option value="Standard.v2">Standard.v2 - GTX1050ti, AMD Ryzen 3600x, 16GB - ОЗУ</option>
                </select>
                <input type="submit" value="Заказать">
            </form>
            
            <input type="button" value="Выйти">
            </form>
    </section>
<?php
        }
?>
</body>

</html>