<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework8</title>
</head>
<body>
    <h1>Calculate the area of a circle.</h1>
    <form action="" method="post">
        <div>
            <label for="number">Input the radius:</label>
            <input type="text" name="number" id="number">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
        if(isset($_POST['btnSend'])){
            $number = $_POST['number'];
            $area = $number * $number * 3.14;
            echo "<h2>Area: ". $area ."</h2>";
        }
    ?>
</body>
</html>