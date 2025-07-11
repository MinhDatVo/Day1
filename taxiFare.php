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
            <label for="kilometer">Kilometer:</label>
            <input type="text" name="kilometer" id="kilometer">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
       if(isset($_POST['btnSend'])){
        $kilometer = $_POST['kilometer'];
        $first_level = 15000;
        $second_level = 12000;
        $third_level = 9000;
        $fourth_level = 12/100;
        $amount = 0;

        if($kilometer == 1){
            $amount = $first_level;
        } elseif($kilometer >= 1 && $kilometer <= 6){
            $amount = $first_level + ($kilometer - 1) * $second_level;
        } elseif($kilometer >= 7 && $kilometer <= 140){
            $amount = $first_level + 4 * $second_level + ($kilometer - 6) * $third_level;
        } else {
            $amount = $first_level + 4 * $second_level + ($kilometer - 6) * $third_level + 9000 * $fourth_level;
        }

        echo "<h2>Amount: ". $amount ."</h2>";
       }
    ?>
</body>
</html>