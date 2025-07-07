<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 250px;
            height: 250px;
            margin: auto;
            border: 1px solid black;
            padding: 10px;
            border-radius: 5px;
            margin-top: 50px;
        }

        input{
            margin-bottom: 10px;
            padding: 5px;
            border-radius: 5px;
        }

        h2{
            text-align: center;
            margin-bottom: 10px;
        }

        #username, #password{
            width: 90%;
        }

        #Login{
            width: 30%;
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <h2>Login</h2>
    <div>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required>
    </div>
    <input type="submit" name="btnLogin" value="Login" id="Login">
    </form>
    <?php
        if(isset($_POST['btnLogin'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $username = "Hutech";
            $password = "123";

            if($username == "Hutech" && $password == "123"){
                header("Location: hello.php");
            } else {
                echo "Wrong username or password";
            }
        }
    ?>
</body>
</html>