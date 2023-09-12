<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Temperature Converter</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" step="0.01" name="temperature" required>
        <br><br>
        <label for="conversion">Select Conversion:</label>
        <select name="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <br><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];
        $converted_temperature = 0;

        if ($conversion == "celsius_to_fahrenheit") {
            $converted_temperature = ($temperature * 9/5) + 32;
            echo "<p>$temperature &deg;C is equal to $converted_temperature &deg;F</p>";
        } 
        elseif ($conversion == "fahrenheit_to_celsius") {
            $converted_temperature = ($temperature - 32) * 5/9;
            echo "<p>$temperature &deg;F is equal to $converted_temperature &deg;C</p>";
        }
    }
    ?>

</body>
</html>