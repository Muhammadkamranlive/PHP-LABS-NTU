<?php
//   if (isset($_POST['btn'])){
//      setcookie('id','1',time()+3600);
//      echo "coockie is set";
//      echo $_COOKIE['id'];
//
//   }
//   if (isset($_POST['btn2'])){
//       setcookie('id','1-'.'2',time()+3600);
//       echo "coockie set ";
//       echo $_COOKIE['id'];
//   }
//    if (isset($_POST['btn3'])){
//        setcookie('id','1-'.'2-'.'3',time()+3600);
//        echo "coockie set";
//        echo $_COOKIE['id'];
//    }
session_start();
if (isset($_GET['name'])){
    if ($_GET['name']==1){
        setcookie('id2',$_GET['name'],time()+3600);
        $_SESSION['landid']=$_GET['name'];
        echo "cookie value is set to ".$_COOKIE['id2'];
        echo  "session value is ".$_SESSION['landid'];
    }
    else if ($_GET['name']==2){
        setcookie('id2',$_GET['name']."-".'1',time()+3600);
        $_SESSION['landid']=$_SESSION['landid']."-".$_GET['name'];
        echo "cookie value is set to ".$_COOKIE['id2'];
        echo  "session value is ".$_SESSION['landid'];
    }
    else if ($_GET['name']==3){
        setcookie('id2',$_GET['name']."-".'1-2',time()+3600);
        $_SESSION['landid']=$_SESSION['landid']."-".$_GET['name'];
        echo "cookie value is set to ".$_COOKIE['id2'];
        echo  "session value is ".$_SESSION['landid'];
    }

}

?>
<table>
    <tr>
        <td>
            1
        </td>
        <td>
            lahore
        </td>
        <td>
            <a href="1.php?name=1">Select Land</a>
        </td>
    </tr>
    <tr>
        <td>
            2
        </td>
        <td>
            lahore
        </td>
        <td>
            <a href="1.php?name=2">Select Land</a>
        </td>
    </tr>
    <tr>
        <td>
            3
        </td>
        <td>
            lahore
        </td>
        <td>
            <a href="1.php?name=3">Select Land</a>
        </td>
    </tr>
</table>
