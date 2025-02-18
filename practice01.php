<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Sides Calculator</title>
</head>
<body>
    
    <h2>Three Sides Calculator</h2>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $s1 = $_POST['side1'];
            $s2 = $_POST['side2'];
            $s3 = $_POST['side3'];
        }
    ?>

    <form action="POST" action="">
        Side 1: <input type="number" name="side1" placeholder="Enter any Number" required><br><br>
        Side 2: <input type="number" name="side2" placeholder="Enter any Number" required><br><br>
        Side 3: <input type="number" name="side3" placeholder="Enter any Number" required><br><br>
        <input type="submit" name="calculate" value="Calculate Area">
    </form>
</body>
</html>