<?php
require_once("DbConnection.php");
require_once ("employee.php");
require_once ("student.php");
//$DataObject= new DbConnection();
$empObj =new employee();
$std=new student();
$std->setname($_POST['Username']);
$std->setsalary($_POST['Password']);
$std->setgrade($_POST['Email']);
$data=array($std->getname(),$std->getsalary(),$std->getgrade());
$msg=$std->insertRecord($data);
echo $msg;