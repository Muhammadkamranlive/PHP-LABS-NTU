<?php
require_once("DbConnection.php");
//$obj= new DbConnection();
require_once ("employee.php");
require_once ("student.php");
$empObj =new employee();
$std=new student();
$msg=$std->deletetion($_GET['user_id']);
echo $msg;
