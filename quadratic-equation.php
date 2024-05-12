<!DOCTYPE html>
<html>
<head>
    <title>Корни квадратного уравнения</title>
</head>
<body>
    <h1>Корни квадратного уравнения</h1>
    <form action="quadratic-equation.php" method="post">
        <label for="a">Коэффициент a:</label>
        <input type="number" name="a" id="a">
        <label for="b">Коэффициент b:</label>
        <input type="number" name="b" id="b">
        <label for="c">Коэффициент c:</label>
        <input type="number" name="c" id="c">
        <input type="submit" value="Решить">
    </form>

    <?php
    if (isset($POST['a']) && isset($POST'') && isset($POST['c'])) {
        $a = $POST'a';
        $b = $POST['b'];
        $c = $POST'c';

        // Решаем квадратное уравнение
        $discriminant = $b  $b - 4  $a  $c;

        if ($discriminant > 0) {
            // Два действительных корня
            $x1 = (-$b + sqrt($discriminant)) / (2  $a);
            $x2 = (-$b - sqrt($discriminant)) / (2  $a);

            echo "<p>Корни уравнения: x1 = $x1, x2 = $x2</p>";
        } elseif ($discriminant == 0) {
            // Один действительный корень
            $x = -$b / (2  $a);

            echo "<p>Корень уравнения: x = $x</p>";
        } else {
            // Комплексные корни
            $realPart = -$b / (2  $a);
            $imaginaryPart = sqrt(-$discriminant) / (2  $a);

            echo "<p>Комплексные корни уравнения: x1 = $realPart + $imaginaryPart  i, x2 = $realPart - $imaginaryPart  i</p>";
        }
    }
    ?>
</body>
</html>