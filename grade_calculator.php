<!DOCTYPE html>
<html lang="en">
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h3>Grade Calculator</h3>
    <form method="post" action="">
        <label for="test1">Test 1 Mark: </label>
        <input type="number" id="test1" name="test1" required>
        <br><br>
        <label for="test2">Test 2 Mark: </label>
        <input type="number" id="test2" name="test2" required>
        <br><br>
        <label for="test3">Test 3 Mark: </label>
        <input type="number" id="test3" name="test3" required>
        <br><br>
        <input type="submit" value="Calculate">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $test1 = $_POST["test1"];
        $test2 = $_POST["test2"];
        $test3 = $_POST["test3"];

        $average = ($test1 + $test2 + $test3) / 3;

        if ($average >= 80 && $average <=100) {
            $grade = 'A+';
        } elseif ($average >=70 && $average <=79) {
            $grade = 'A';
        } elseif ($average >=60 && $average <=69) {
            $grade = 'A-';
        } elseif ($average >=50 && $average <=59) {
            $grade = 'B';
        } elseif ($average >=40 && $average <=49) {
            $grade = 'C';
        } elseif ($average >=33 && $average <=39) {
            $grade = 'D';
        } elseif ($average <=32 && $average >=0) {
            $grade = 'F';
        } else {
            $grade = "Invalid Input";
        }

        echo "<p>Average Result: $average</p>";
        echo "<p>Grade: $grade</p>";
    }
    ?>
    
</body>

</html>
