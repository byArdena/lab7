<!DOCTYPE html>
<html>
<head>
  <title>Подсчет слов и символов</title>
</head>
<body>
  <h2>Подсчет слов и символов</h2>
  <form method="post">
    <textarea name="text" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Подсчитать">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $wordCount = str_word_count($text);
    $charCount = strlen($text);
    echo "Количество слов: " . $wordCount . "<br>";
    echo "Количество символов: " . $charCount . "<br>";
  }
  ?>
  <a href="index.php">Назад</a>
</body>
</html>