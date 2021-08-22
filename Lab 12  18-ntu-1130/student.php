<?php

require_once ("employee.php");
require_once ("DbConnection.php");
class student extends employee
{
    private $grade;

    function setgrade($grade){
        $this->grade=$grade;
    }
    function  getgrade(){
        return $this->grade;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function insertRecord($ArrayData){
        $dbConnection =new DbConnection();
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

}