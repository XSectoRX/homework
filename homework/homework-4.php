<?php
$content = 0;
$content = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Moscow,ru&type=like&units=metric&APPID=af7d58abeda3d58b74a7f784bd978671');

if ($content !== 0){
    $result = json_decode($content, true);
    $date = date("d-m-Y H:m:s");
    $weather = array(
        "date" => $date,
        "city" => $result['name'],
        "weather" => $result['weather'][0]['main'],
        "icon" => "http://openweathermap.org/img/w/" . $result['weather'][0]['icon'] . ".png",
        "temp" => $result['main']['temp'] . "&deg;C",
        "pressure" => $result['main']['pressure'] . " hPa",
        "humidity" => $result['main']['humidity'] . "%",
        "visibility" => $result['visibility'] . " meter",
        "wind_speed" => $result['wind']['speed'] . " meter/sec",
        "clouds" => $result['clouds']['all'] . "%",

    );
    file_put_contents("weather", serialize($weather));
}else{
    $weather = unserialize(file_get_contents("weather"));
}

?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/new.css">
  <title>Homework-4</title>
</head>
<body>
<div class="weather-widget">
  <h2 class="weather-widget__city-name">Weather in <?= $weather['city'] ?> </h2>
  <h3 class="weather-widget__temperature">
    <img class="weather-widget__img" src="<?= $weather['icon'] ?>" alt="<?= $weather['weather'] ?>" width="50" height="50"> <?= $weather['temp'] ?>
  </h3>
  <p>Time: <?= $weather['date'] ?><br><b style="font-size: 18px"><?= $weather['weather'] ?></b></p>

  <table>
    <tbody>
      <tr class="weather-widget__item">
        <td><b>Wind speed</b></td>
        <td><?= $weather['wind_speed'] ?></td>
      </tr>
      <tr class="weather-widget__item">
        <td><b>Cloudiness</b></td>
        <td><?= $weather['clouds'] ?></td>
      </tr>
      <tr class="weather-widget__item">
        <td><b>Pressure</b></td>
        <td><?= $weather['pressure'] ?></td>
      </tr>
      <tr class="weather-widget__item">
        <td><b>Humidity</b></td>
        <td><?= $weather['humidity'] ?></td>
      </tr>
      <tr class="weather-widget__item">
        <td><b>Visibility</b></td>
        <td><?= $weather['visibility'] ?></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
