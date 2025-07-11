<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework7</title>
</head>
<body>
    <h1>Reverse a string.</h1>
    <form action="" method="post">
        <div>
            <label for="string">String:</label>
            <input type="text" name="string" id="number">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
        if(isset($_POST['btnSend'])){
            $string = $_POST['string'];
            $reverse = strrev($string);
            echo "<h2>Reverse: ". $reverse ."</h2>";
        }
    ?>
</body>
</html>