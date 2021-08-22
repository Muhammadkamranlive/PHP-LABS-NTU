<?php


class DataBase
{
   private   $dataBaseObject;

   public  function __construct(){
      $this->dataBaseObject= new PDO('mysql:host=localhost;dbname=birds','root','');
       if(!$this->dataBaseObject){
           die("Connection failded");
       }
   }

    public function loginChek($autharr)
    {
        $st= $this->dataBaseObject->prepare('select * from users where username=? and password=?');
        $st->execute($autharr);
        $std=$st->fetch();
        return $std;

//        if ($st->rowCount() >0)
//        {
//            $row=$st->fetch();
//            return $row[0]; // user id
//        }
//        else
//        {
//            return false;
//        }
    }
    public function DisplayData(){
        $usersData = $this->dataBaseObject->query("select *  from bird_detail");
        $rows=$usersData->fetchAll();
        return $rows;
    }

    public function insertRecord($ArrayData){
        $objectInsertion=$this->dataBaseObject->prepare("insert into bird_detail (Bird_name,Food,Entered_By) values(?,?,?)");
        $objectInsertion->execute($ArrayData);
        try {
            $objectInsertion->rowCount();
            echo 'User Added Succcessfully';
            header("Location:AddBirds.php");
        }


        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }


}