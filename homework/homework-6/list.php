<?php

    $path = __DIR__ . "/test/";
    $list = array_diff( scandir( $path), array('..', '.'));

?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>list</title>
</head>
<body>
<div style="font-weight: bold; font-size: 18px; color: #1e7e34; margin: 20px;">
  <a href="admin.php">Загрузить новые тесты</a>
</div>
  <h4>Выберите тест:</h4>
  <ol>
    <?php foreach ($list as $value) { ?>
    <li>
      <a href="test.php?name=<?= $value ?> "> <?= $value ?></a>
    </li>
    <?php } ?>
  </ol>


</body>
</html>

