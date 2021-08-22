<?php

//require_once("DataBase.php");
//$DataObject = new DataBase();
//$data = array($_POST['birdname'], $_POST['food'], $_POST['enteredby']);
//$msg = $DataObject->insertRecord($data);
//echo $msg;
   session_start();
if (isset($_GET['name'])){
    if ($_GET['name']==1){
        setcookie('id2',$_GET['name'],time()+3600);
        $_SESSION['landid']=$_GET['name'];
        echo "cookie value is set to ".$_COOKIE['id2'];
        echo  "session value is ".$_SESSION['landid'];
    }
    else if ($_GET['name']==2){
        setcookie('id2',$_GET['name']."-".$_COOKIE['id2'],time()+3600);
        $_SESSION['landid']=$_SESSION['landid']."-".$_GET['name'];
        echo "cookie value is set to ".$_COOKIE['id2'];
        echo  "session value is ".$_SESSION['landid'];
    }
    else if ($_GET['name']==3){
        setcookie('id2',$_GET['name']."-".$_COOKIE['id2'],time()+3600);
        $_SESSION['landid']=$_SESSION['landid']."-".$_GET['name'];
        echo "cookie value is set to ".$_COOKIE['id2'];
        echo  "session value is ".$_SESSION['landid'];
    }

}