<!DOCTYPE html>
<html>

<head>
    <title>Comparison Tool</title>
</head>

<body>
    <h3>Comparison Tool</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number1">Enter Number 1:</label>
        <input type="number" step="0.01" name="number1" required>
        <br><br>
        <label for="number2">Enter Number 2:</label>
        <input type="number" step="0.01" name="number2" required>
        <br><br>
        <input type="submit" value="Compare Numbers">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];


        $larger_number = ($number1 > $number2) ? $number1 : $number2;

        echo "<p>The larger number is: $larger_number</p>";
    }
    ?>

</body>

</html>