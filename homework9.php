<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework9</title>
</head>
<body>
    <h1>Check if a number is a palindrome</h1>
    <form action="" method="post">
        <div>
            <label for="string">String:</label>
            <input type="text" name="string" id="number">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
        if(isset[$_POST['btnSend']]){
            $string = $_POST['string'];
            $reverse = strrev($string);
            if($string == $reverse){
                echo "<h2>Palindrome</h2>";
            }else{
                echo "<h2>Not Palindrome</h2>";
            }
        }
    ?>
</body>
</html>