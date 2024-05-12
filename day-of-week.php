<!DOCTYPE html>
<html>
<head>
    <title>День недели</title>
</head>
<body>
    <h1>День недели</h1>
    <form action="day-of-week.php" method="post">
        <label for="day">День:</label>
        <select name="day" id="day">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <label for="month">Месяц:</label>
        <select name="month" id="month">
            <?php
            $months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
            foreach ($months as $month) {
                echo "<option value='$month'>$month</option>";
            }
            ?>
        </select>
        <label for="year">Год:</label>
        <select name="year" id="year">
            <?php
            for ($i = 1990; $i <= 2025; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <input type="submit" value="Узнать день недели">
    </form>

    <?php
    if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        // Преобразуем месяц в число
        $monthNumber = array_search($month, $months) + 1;

        // Вычисляем день недели
        $timestamp = mktime(0, 0, 0, $monthNumber, $day, $year);
        $dayOfWeek = date('w', $timestamp);

        // Выводим день недели
        switch ($dayOfWeek) {
            case 0:
                echo "<p>День недели: Воскресенье</p>";
                break;
            case 1:
                echo "<p>День недели: Понедельник</p>";
                break;
            case 2:
                echo "<p>День недели: Вторник</p>";
                break;
            case 3:
                echo "<p>День недели: Среда</p>";
                break;
            case 4:
                echo "<p>День недели: Четверг</p>";
                break;
            case 5:
                echo "<p>День недели: Пятница</p>";
                break;
            case 6:
                echo "<p>День недели: Суббота</p>";
                break;
        }
    }
    ?>
</body>
</html>