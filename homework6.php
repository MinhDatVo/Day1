<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework6</title>
</head>
<body>
    <h1>Calculate the perimeter of a triangle.</h1>
    <form action="" method="post">
        <div>
            <label for="number">Input number of 3 sides:</label>
            <input type="text" name="number" id="number">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
        if(isset($_POST['btnSend'])){
            $number = $_POST['number'];
            $number = explode(",", $number);
            $perimeter = $number[0] + $number[1] + $number[2];
            echo "<h2>Perimeter: ". $perimeter ."</h2>";
        }
    ?>
</body>
</html>