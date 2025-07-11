<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework3</title>
</head>
<body>
    <h1>Find the factorial of a number</h1>
    <form action="" method="post">
        <div>
            <label for="number">Number:</label>
            <input type="text" name="number" id="number">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
        if(isset($_POST['btnSend'])){
            $number = $_POST['number'];
            $factorial = 1;
            for($i = 1; $i <= $number; $i++){
                $factorial *= $i;
            }
            echo "<h2>Factorial: ". $factorial ."</h2>";
        }
    ?>
</body>
</html>