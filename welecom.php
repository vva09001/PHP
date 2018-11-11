<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welecom PHP</title>
   
</head>
<body>
<?php 
    session_start();
    if (!isset($_SESSION["username"])) {
        header('Location: loginaction.php');
   }
    $name = $_POST["username"];
    $pass = $_POST["pass"]; 
    $_SESSION["username"] = $name;
    $_SESSION["pass"] = $pass; 
    if ($_SESSION["username"] == "admin" &&  $_SESSION["pass"]== "password") 
    {
        echo "<h1>Welcome admin to my website</h1>";
    }
    else 
    {
        echo "<h1> Your input error email and pass word</h1>";
    }
    function destroyss(){
        session_destroy();
    }
?>

<a href="loginaction.php" onClick="destroyss();">Log out</a>
</body>
</html>
