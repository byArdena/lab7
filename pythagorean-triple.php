<!DOCTYPE html>
<html>
<head>
  <title>Проверка на тройку Пифагора</title>
</head>
<body>
  <h2>Проверка на тройку Пифагора</h2>
  <form method="post">
    Введите первое число: <input type="text" name="num1"><br>
    Введите второе число: <input type="text" name="num2"><br>
    Введите третье число: <input type="text" name="num3"><br>
    <input type="submit" value="Проверить">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $a = min($num1, $num2, $num3);
    $c = max($num1, $num2, $num3);
    $b = ($num1 + $num2 + $num3) - ($a + $c);
    if ($a * $a + $b * $b == $c * $c) {
      echo "Это тройка Пифагора <br>";
    } else {
      echo "Это не тройка Пифагора <br>";
    }
  }
  ?>
  <a href="index.php">Назад</a>
</body>
</html>