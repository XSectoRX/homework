<?php
$path = __DIR__ . "/test/";
if(!isset($_GET['name']) || !file_exists($path . $_GET['name'])) {
  echo('Укажите карректное имя теста.<brdie>');
  echo "  <a href=\"list.php\" style=\"margin-left: 150px;\">К загруженным тестам!</a>";
  exit;

}else{
  $test_file_name = $_GET['name'];
}

$content = file_get_contents($path. $_GET['name']);
$date = json_decode($content, true);
//print_r($date);
$answer = $_POST;
//print_r($answer);
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>address book</title>
  <link rel="stylesheet" href="../../css/new.css">
</head>
<body>
<div style="margin: 20px auto; text-align: center; font-weight: bold; font-size: 18px; color: #1e7e34">
  <a href="admin.php" style="float: left;margin-left: 200px;">Загрузить новые тесты</a>
  <a href="list.php" style="margin-left: 150px;">К загруженным тестам!</a>
</div>
<form action="" method="POST">
  <?php foreach ($date as $dates) { ?>
    <fieldset>
      <legend><?= $dates['question'] ?></legend>
      <label><input type="radio" name="<?= $dates['name'] ?>" value="<?= $dates['answer1'] ?>" required><?= $dates['answer1'] ?></label>
      <label><input type="radio" name="<?= $dates['name'] ?>" value="<?= $dates['answer2'] ?>" ><?= $dates['answer2'] ?></label>
      <label><input type="radio" name="<?= $dates['name'] ?>" value="<?= $dates['answer3'] ?>" ><?= $dates['answer3'] ?></label>
      <label><input type="radio" name="<?= $dates['name'] ?>" value="<?= $dates['answer4'] ?>" ><?= $dates['answer4'] ?></label>
      <label><input type="radio" name="<?= $dates['name'] ?>" value="<?= $dates['answer5'] ?>" ><?= $dates['answer5'] ?></label>
      <?php if ($answer[$dates['name']] == $dates['true']) { ?>
        <span style="color: green; padding-left: 20px; font-weight: bold">ВЕРНО, ОТВЕТ: <?= $dates['true'] ?></span>
      <?php }elseif (!empty($answer[$dates['name']])){ ?>
        <span style="color: red; padding-left: 20px; font-weight: bold">НЕ ВЕРНО</span>
      <?php } ?>
    </fieldset>
  <?php } ?>
  <input type="submit" value="Отправить">

</form>
</body>
</html>