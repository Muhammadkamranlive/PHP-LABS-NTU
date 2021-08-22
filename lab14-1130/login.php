<?php

if (isset($_POST['btnsub']))
{
    require_once ('DataBase.php');
    $dbObject= new DataBase();
    $arrayData=array($_POST['username'],$_POST['password']);
    $result=$dbObject->loginChek($arrayData);

    if(!$result ===false) {
        session_start();
        $_SESSION['userid']=0;
        if (isset($_POST['remember']))
        {

            setcookie('rme',$result,time()+3600); //1hour
            setcookie('count',$count,time()+3600);
            header('location:AddBirds.php');
        }


    }

    else
    {
        echo "User name or password is incorrect";
    }

    $_SESSION['userid']++;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>User Login</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text"  class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default" name="btnsub">Submit</button>
    </form>
</div>

<?php
if (isset($_COOKIE['rme']))
{

    echo "<h1>you Already logged in" .$_COOKIE['rme']."</h1>";

    /// header("location:AddBirds.php");
}

if (!isset($_SESSION['userid'])){
   $_SESSION['userid']=0;
    session_start();
}
$_SESSION['userid']++;
echo "<h6>you have visted this page  <h1>".  $_SESSION['userid']."</h1>times</h6>";

?>

</body>
</html>

