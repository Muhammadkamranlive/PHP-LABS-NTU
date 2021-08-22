<?php
require_once ("DbConnection.php");
$objectDB= new DbConnection();
$id=$_POST['user_id'];
$Uname=$_POST['Username'];
$pass=$_POST['Password'];
$email=$_POST['Email'];
$objectDB->updateRecord($Uname,$pass,$email,$id);