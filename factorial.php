<!DOCTYPE html>
<html>
<head>
    <title>Факториал числа</title>
</head>
<body>
    <h1>Факториал числа</h1>
    <form action="factorial.php" method="post">
        <label for="number">Введите число:</label>
        <input type="number" name="number" id="number">
        <input type="submit" value="Вычислить">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];

        // Вычисляем факториал числа
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        echo "<p>Факториал числа $number: $factorial</p>";
    }
    ?>
</body>
</html>