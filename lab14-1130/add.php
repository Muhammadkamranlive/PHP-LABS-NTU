<?php

require_once("DataBase.php");
$DataObject = new DataBase();
$data = array($_POST['birdname'], $_POST['food'], $_POST['enteredby']);
$msg = $DataObject->insertRecord($data);
echo $msg;