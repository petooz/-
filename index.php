<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Простой калькулятор</title>
</head>
<body>
    <h1>Калькулятор</h1>
    <form method="post">
        <input type="number" name="num1" placeholder="Первое число" required>
        <select name="operation">
            <option value="add">Сложить</option>
            <option value="subtract">Вычесть</option>
            <option value="multiply">Умножить</option>
            <option value="divide">Разделить</option>
        </select>
        <input type="number" name="num2" placeholder="Второе число" required>
        <button type="submit">Посчитать</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Ошибка: Деление на ноль!';
                }
                break;
        }

        echo "<h2>Результат: $result</h2>";
    }
    ?>
</body>
</html>