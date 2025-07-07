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
            <label for="number">Number:</label>
            <input type="text" name="number" id="number">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
        if(isset($_POST['btnSend'])){
            $numbers = $_POST['number'];
            $number = explode(",", $numbers);
            $maxNumber = $number[0];
            for($i = 1; $i < count($number); $i++){
                if($number[$i] > $maxNumber){
                    $maxNumber = $number[$i];
                }
            }
            echo "<h2>Max number: ". $maxNumber ."</h2>";
        }
    ?>
</body>
</html>