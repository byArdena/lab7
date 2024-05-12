<!DOCTYPE html>
<html>
<head>
    <title>Преобразование температуры</title>
</head>
<body>
    <h1>Преобразование температуры</h1>
    <form action="convert-temperature.php" method="post">
        <label for="celsius">Температура в градусах Цельсия:</label>
        <input type="number" name="celsius" id="celsius">
        <input type="submit" value="Преобразовать">
    </form>

    <?php
    if (isset($_POST['celsius'])) {
        $celsius = $_POST['celsius'];

        // Преобразуем температуру в градусы Фарингейта
        $fahrenheit = $celsius * 9 / 5 + 32;

        echo "<p>Температура в градусах Фарингейта: $fahrenheit</p>";
    }
    ?>
</body>
</html>