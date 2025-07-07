<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="year">Your year of birth:</label>
            <input type="number" name="age" id="age">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
        if(isset($_POST['btnSend'])){
            $myYear = $_POST['age'];
            $currentYear = date("Y");
            $age = $currentYear - $myYear;
            echo "<h2>My are is $age years old</h2>";
        }
    ?>
</body>
</html>