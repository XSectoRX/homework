<?php
$content = file_get_contents(__DIR__ . '/address.json');
$date = json_decode($content, true);
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>address book</title>
  <link rel="stylesheet" href="../css/new.css">
</head>
<body>
  <table>
    <tbody>
    <tr class="tr-h">
      <td colspan="3">Ф.И.О.</td>
      <td colspan="3">Адрес</td>
      <td colspan="2">телеофон</td>
    </tr>
    <tr class="tr-h">
      <td>Фамилия</td>
      <td>Имя</td>
      <td>Отчество</td>
      <td>Улица</td>
      <td>Город</td>
      <td>Индекс</td>
      <td>Основной</td>
      <td>Дополнительный</td>
    </tr>
    <?php foreach ($date as $dates) { ?>
    <tr class="tr-h">
      <td><?= $dates['lastname'] ?></td>
      <td><?= $dates['firstname'] ?></td>
      <td><?= $dates['middlename'] ?></td>
      <td><?= $dates['address']['streetaddress'] ?></td>
      <td><?= $dates['address']['city'] ?></td>
      <td><?= $dates['address']['postalcode'] ?></td>
      <td><?= $dates['phonenumbers'][0] ?></td>
      <td><?= $dates['phonenumbers'][1] ?></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>

</body>
</html>
