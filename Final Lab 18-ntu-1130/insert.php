<?php
 require_once("DbConnection.php");
 $obj= new DataBaseConnection();
 $data=array($_POST['name'],$_POST['description'],$_POST['price']);
 $msg=$obj->insertRecord($data);
 echo $msg;


?>