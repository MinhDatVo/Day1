<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework2</title>
</head>
<body>
    <h1>Convert Celsius to Fahrenheit</h1>
    <form action="" method="post">
        <div>
            <label for="number">A temperature:</label>
            <input type="text" name="number" id="number">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
        if(isset($_POST['btnSend'])){
            $number = $_POST['number'];
            $fahrenheit = $number * 1.8 + 32;
            echo "<h2>Result: ". $fahrenheit ."</h2>";
        }
    ?>
</body>
</html>