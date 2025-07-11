<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework4</title>
</head>
<body>
    <h1>Check number is prime or not prime</h1>
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
            $isPrime = true;

            if($number < 2){
                echo "<h2>Not Prime</h2>";
            } else {
                for($i = 2; $i <= sqrt($number); $i++){
                    if($number % $i == 0){
                        $isPrime = false;
                        break;
                    }
                }

                if($isPrime){
                    echo "<h2>Prime</h2>";
                } else {
                    echo "<h2>Not Prime</h2>";
                }
            }
        }
    ?>
</body>
</html>