<?php
$title = "Страница пользователя Антон";
$name = "Антон";
$age = 32;
$mail = "malarovlanton@yandex.ru";
$city = "Moscow";
$about = "voip engineer";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>траница пользователя Антон</title>
</head>
<body>
<h2><?= $title ?></h2><br>
<div>
        <span style="float: left; margin: 0 10px;">Имя <br>
        Возраст <br>
        Адрес электронной почты <br>
        Город <br>
        О себе <br>
        </span


        <span>
            <?= $name ?> <br>
            <?= $age ?> <br>
            <?= $mail ?> <br>
            <?= $city ?> <br>
            <?= $about ?> <br>
        </span>
</div>
</body>
</html>