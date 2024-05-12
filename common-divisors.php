<!DOCTYPE html>
<html>
<head>
    <title>Общие делители двух чисел</title>
</head>
<body>
    <h1>Общие делители двух чисел</h1>
    <form action="common-divisors.php" method="post">
        <label for="number1">Введите первое число:</label>
        <input type="number" name="number1" id="number1">
        <label for="number2">Введите второе число:</label>
        <input type="number" name="number2" id="number2">
        <input type="submit" value="Найти общие делители">
    </form>

    <?php
    if (isset($_POST['number1']) && isset($_POST['number2'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        // Находим общие делители двух чисел
        $commonDivisors = [];
        for ($i = 1; $i <= min($number1, $number2); $i++) {
            if ($number1 % $i == 0 && $number2 % $i == 0) {
                $commonDivisors[] = $i;
            }
        }

        echo "<p>Общие делители чисел $number1 и $number2:
        . implode(", ", $commonDivisors) . "</p>";
    }
    ?>
</body>
</html>