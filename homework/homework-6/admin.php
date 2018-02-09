<?php

if (isset($_FILES) && !empty($_FILES)) {
  $array = reArrayFiles($_FILES['userfile']);
  $path = __DIR__ . "/test/";
  foreach ($array as $file) {
    $uploadfile = basename($file['name']);
    $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    if ($file['error'] == UPLOAD_ERR_OK && $file_extension == "json") {
      move_uploaded_file($file['tmp_name'], $path . $uploadfile);
      echo "<p style='color:#1c7430'> {$file['name']} ЗАГРУЖЕН УСПЕШНО </p>";
    } else {
      echo "<p style='color:red'> ОШИБКА - {$file['name']} НЕ ЗАГРУЖЕН </p>";
    }
  }
}

function reArrayFiles($files) {
  $array = array();
  $count = count($files['name']);
  $keys = array_keys($files);

  for($i = 0; $i < $count; $i++) {
    foreach($keys as $key) {
      $array[$i][$key] = $files[$key][$i];
    }
  }

  return $array;
}
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>download form</title>
</head>
<body>
<div style="font-weight: bold; font-size: 18px; color: #1e7e34; margin: 20px;">
  <a href="list.php">К загруженным тестам!</a>
</div>
<form action=" " method="post" enctype="multipart/form-data">
  <input type="file" name="userfile[]" multiple="multiple"><br>
  <input type="submit" value="Загрузить"><br>
</form>
</body>
</html>