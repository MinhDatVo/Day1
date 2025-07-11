<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework1</title>
</head>
<body>
    <h1>Check the number is even or odd</h1>
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
            if($number % 2 == 0){
                echo "<h2>Even</h2>";
            }else{
                echo "<h2>Odd</h2>";
            }
        }
    ?>
</body>
</html>