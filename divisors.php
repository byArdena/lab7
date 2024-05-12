<!DOCTYPE html>
<html>
<head>
    <title>Делители числа</title>
</head>
<body>
    <h1>Делители числа</h1>
    <form action="divisors.php" method="post">
        <label for="number">Введите число:</label>
        <input type="number" name="number" id="number">
        <input type="submit" value="Найти делители">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];

        // Находим делители числа
        $divisors = [];
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                $divisors[] = $i;
            }
        }

        echo "<p>Делители числа $number: " . implode(", ", $divisors) . "</p>";
    }
    ?>
</body>
</html>