<!DOCTYPE html>
<html>
<head>
  <title>Количество дней до дня рождения</title>
</head>
<body>
  <h2>Количество дней до дня рождения</h2>
  <form method="post">
    Введите дату рождения в формате 'dd.mm.yyyy' (указывать текущий год): <input type="text" name="dob">
    <input type="submit" value="Рассчитать">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["dob"])) {
      echo "Пожалуйста, введите вашу дату рождения";
    } else {
      if (DateTime::createFromFormat('d.m.Y', $_POST["dob"]) !== false) {
        $dob = DateTime::createFromFormat('d.m.Y', $_POST["dob"])->format('Y-m-d');
        $currentDate = date('Y-m-d');
        $nextBirthday = new DateTime(date('Y') . "-" . date('m-d', strtotime($dob)));
        $nextBirthday->modify("+" . (date('Y', strtotime($currentDate)) - date('Y', strtotime($dob))) . " years");
        if ($nextBirthday < new DateTime($currentDate)) {
          $nextBirthday->modify("+1 year");
        }
        $daysUntilBirthday = $nextBirthday->diff(new DateTime($currentDate))->format("%a");
        echo "До вашего дня рождения осталось " . $daysUntilBirthday . " дней <br>";
      } else {
        echo "Некорректный формат даты. Пожалуйста, введите дату в формате 'dd.mm.yyyy'";
      }
    }
  }
  ?>
  <a href="index.php">Назад</a>
</body>
</html>