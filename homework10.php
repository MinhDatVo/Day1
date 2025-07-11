<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework10</title>
</head>
<body>
    <h1>Generate the Fibonacci sequence up to n terms</h1>
    <form action="" method="post">
        <div>
            <label for="number">number:</label>
            <input type="text" name="number" id="number">
            <input type="submit" name="btnSend" value="Send">
        </div>
    </form>
    <?php
        if (isset($_POST['btnSend'])) {
            $a = intval($_POST["number"]);
            function generateFibonacciCenteredTriangle($rows) {
                $fib = [1, 1];
                $total = $rows * ($rows + 1) / 2;
                for ($i = 2; $i < $total; $i++) {
                    $fib[] = $fib[$i - 1] + $fib[$i - 2];
                }

                $index = 0;
                echo "<pre>";
                for ($i = 1; $i <= $rows; $i++) {
                    echo str_repeat("  ", $rows - $i);
                    for ($j = 1; $j <= $i; $j++) {
                        printf("%5d", $fib[$index]);
                        $index++;
                    }
                    echo "\n";
                }
                echo "</pre>";
            }
            echo "<h3>Centered Fibonacci Triangle with $a rows:</h3>";
            generateFibonacciCenteredTriangle($a);
        }
    ?>
</body>
</html>