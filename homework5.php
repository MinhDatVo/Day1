<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework5</title>
</head>
<body>
    <h1>Count the number of vowels in a string</h1>
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
            $vowels = array("a", "e", "i", "o", "u");
            $count = 0;
            for($i = 0; $i < strlen($string); $i++){
                if(in_array($string[$i], $vowels)){
                    $count++;
                }
            }
            echo "<h2>Count: ". $count ."</h2>";
        }
    ?>
</body>
</html>