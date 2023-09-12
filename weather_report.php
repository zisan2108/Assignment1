<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h3>Weather Report</h3>
    
    <?php
  
    $temperature = 18; 
    
    if ($temperature < 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature >= 0 && $temperature < 22) {
        echo "<p>It's cool.</p>";
    } else {
        echo "<p>It's warm.</p>";
    }
    ?>

</body>
</html>
