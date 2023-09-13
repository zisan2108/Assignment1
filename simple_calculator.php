<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Calculator</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .bg_color {
            background-color: #065658;
        }

        .container {
            margin: 50px auto;
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container bg_color">
        <h2>Sample Calculator</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="num1">Enter Number 1:</label>
            <input type="number" step="0.01" name="num1" required>
            <br>
            <label for="num2">Enter Number 2:</label>
            <input type="number" step="0.01" name="num2" required>
            <br>
            <label for="operation">Select Operation:</label>
            <select name="operation" required>
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
            </select>
            <br><br>
            <input type="submit" value="Calculate">
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];
                $result = 0;

                switch ($operation) {
                    case "addition":
                        $result = $num1 + $num2;
                        break;
                    case "subtraction":
                        $result = $num1 - $num2;
                        break;
                    case "multiplication":
                        $result = $num1 * $num2;
                        break;
                    case "division":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            echo "<p>Error: Division by zero is not allowed.</p>";
                        }
                        break;
                    default:
                        echo "<p>Error: Invalid operation selected.</p>";
                        break;
                }

                echo "<p>Result: $result</p>";
            }
            ?>

        </div>
    </div>
</body>

</html>