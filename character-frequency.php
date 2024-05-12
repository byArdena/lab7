<!DOCTYPE html>
<html>
<head>
  <title>Процентное содержание символов</title>
</head>
<body>
  <h2>Процентное содержание символов</h2>
  <form method="post">
    <textarea name="text" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Подсчитать">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $text = str_replace(' ', '', $text);
    $chars = count_chars($text, 1);
    $totalChars = strlen($text);
    foreach ($chars as $char => $count) {
      $percentage = ($count / $totalChars) * 100;
      echo "Символ '" . chr($char) . "' встречается в тексте с процентом " . number_format($percentage, 2) . "%<br>";
    }
  }
  ?>
  <a href="index.php">Назад</a>
</body>
</html>