<!DOCTYPE html>
<html>
<head>
    <title>Addition Calculator</title>
</head>
<body>

    <h2>Addition Calculator</h2>

    <form method="POST">
        First Number:
        <input type="number" name="num1" required>
        <br><br>

        Second Number:
        <input type="number" name="num2" required>
        <br><br>

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $result = $num1 + $num2;

        echo "<h3>Result: $result</h3>";
    }
    ?>

</body>
</html>