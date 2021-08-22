<?php
require_once ("DataBase.php");
$obj= new DataBase();
$data=$obj->DisplayData();
function logout(){
    setcookie("rme", "", time() - 3600);
    header('location:login.php');
}
if (isset($_GET['name'])) {
    logout();
}
if (isset($_COOKIE['rme'])) {

    echo "<a href='AddBirds.php?name=true' class='btn btn-primary rounded' >LogOut</a>";


}else{
    header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Bird Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <h1>Add Birds Page</h1>
    <form action="add.php" method="post">
        <div class="form-group">
            <label for="">Bird name</label>
            <input type="text" class="form-control" name="birdname">
        </div>
        <div class="form-group">
            <label for="">Bird food</label>
            <input type="text" class="form-control" name="food">
        </div>
        <div class="form-group">
            <label for="">Bird name</label>
            <input type="text" class="form-control" name="enteredby">
        </div>
        <input type="submit" class="btn btn-primary" value="Add">
    </form>
       <h1>Birds details</h1>
 <table class="table table-stripped">
     <?php
     foreach($data as $list){

         echo "<tr>";
         echo "<td>$list[1]</td>";
         echo "<td>$list[2]</td>";
         echo "<td>$list[3]</td>";

         echo "<tr/>";
     }

     ?>
 </table>

</div>

</body>
</html>


