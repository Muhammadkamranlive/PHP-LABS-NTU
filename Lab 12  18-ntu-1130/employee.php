<?php

require_once ("DbConnection.php");
class employee extends DbConnection
{
    protected $name;
    protected $salary;
    function setname($name){
        $this->name=$name;
    }
    function getname(){
        return $this->name;
    }
    function setsalary($salary){
        $this->salary=$salary;
    }
    function  getsalary(){
        return $this->salary;
    }

    function __construct(){
       parent::__construct();
    }

    public function insertRecord($ArrayData){

    }

}