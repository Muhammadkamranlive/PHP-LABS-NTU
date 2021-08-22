<?php

class DbConnection
{
    protected $dbConnection;
    function __construct(){
        $this->dbConnection=new PDO(dsn:"mysql:host=localhost;dbname=authentication",username:"root",password:"");
        if(!$this->dbConnection){
            die("connection failed");
        }
    }

    public function DisplayData(){
        $usersData = $this->dbConnection->query("select user_id,Username,Password,Email from users");
        $rows=$usersData->fetchAll();
        return $rows;
    }

    public function SearchData($id){
        $Data = $this->dbConnection->query("select * from users where user_id=$id");
        $rows=$Data->fetch();
        return $rows;
    }

    public function insertRecord($ArrayData){
        $objectInsertion=$this->dbConnection->prepare("insert into users (Username,Password,Email) values(?,?,?)");
        $objectInsertion->execute($ArrayData);
        try {
            $objectInsertion->rowCount();
            echo 'User Added Succcessfully';
            header("Location:index.php");
        }


        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

    public function deletetion($userid){
        $del=$this->dbConnection->prepare("delete from users where user_id=?");
        $del->execute(array($userid));
        try {

            echo 'User Deleted Succcessfully';
            if($del->rowCount()){
                header("Location:index.php");
            }

        }


        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

    public function updateRecord($Uname,$pass,$email,$id){
        $sql="UPDATE users set Username='$Uname' , Password='$pass' , Email='$email' where user_id=$id";
        $Up=$this->dbConnection->query($sql);

        try {

            echo 'User Deleted Succcessfully';
            if($Up->rowCount()){
                header("Location:index.php");
            }

        }


        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

}