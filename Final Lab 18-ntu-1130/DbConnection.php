<?php
class DataBaseConnection{
    private $dbConnection;
    function __construct(){
        $this->dbConnection=new PDO(dsn:"mysql:host=localhost;dbname=student",username:"root",password:"");
        if(!$this->dbConnection){
           die("connection failed");
        }
    }

   public function DisplayData(){
        $studentData = $this->dbConnection->query("select* from tblstudent");
        $rows=$studentData->fetchAll();
        return $rows;
    }



    public function insertRecord($ArrayData){
        $objectInsertion=$this->dbConnection->prepare("insert into tblstudent (name,description,price) values(?,?,?)");
        $objectInsertion->execute($ArrayData);

        if($objectInsertion->rowCount()){
            header('location:index.php');
        }
        else{
            return "0";
        }
    }

    public function deletetion($id){
        $del=$this->dbConnection->prepare("delete from tblstudent where id=?");
        $del->execute(array($id));
        if($del->rowCount()>0){
            header('location:index.php');
        }
        else{
            return "0";
        }
    }
  

}

?>