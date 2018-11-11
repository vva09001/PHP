<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Action</title>

    <style>
        .error {
            color : red;
        }
        form {
            text-align: center;
        }
        input {
            margin:0;
            padding:3px
            
        }
    </style>

</head>
<body>
    <?php
    // session_destroy();
        $name = ""; $pass = "";
        $messName = ""; $messPass ="";

        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["username"])) {
                    $messName = "is not empty ";
                }
                else {
                    $name = test_input($_POST["username"]);
                }

                if (empty($_POST["pass"])) {
                    $messPass = "is not empty";
                }
                else {
                    $pass = test_input($_POST["pass"]);
                }
            }
        
        
        function test_input($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <center><h1>Login<h1></center>
    <div class="conten">
        <form action="welecom.php" method="post">
            User Name <input type="text" name="username" value="<?php echo $name; ?>">
            <span class="error"> * </span> 
            <p class="error"><?php echo $messName ?></p>
            Password &nbsp;&nbsp;&nbsp;<input type="password" name="pass" value="<?php echo $pass; ?>">
            <span class="error"> * </span>
            <p class="error"><?php echo $messPass ?></p>
            
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Login"> 
        </form>
    </div>

</body>
</html>