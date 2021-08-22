<?php
 require_once("DbConnection.php");
 $obj= new DataBaseConnection();
 $msg=$obj->deletetion($_GET['id']);
 echo $msg;
?>