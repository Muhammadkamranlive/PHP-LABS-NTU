<?php

class AddressBook
{
   protected $FristName;
   protected $LatName;
   protected $DOB;
   protected $address;
   protected $CellNumber;

   function __construct($FirstName,$LastName,$DOB,$address,$CellNumber){
       $this->FristName=$FirstName;
       $this->LatName=$LastName;
       $this->DOB=$DOB;
       $this->address=$address;
       $this->CellNumber=$CellNumber;
   }

   public  function  AddressBookDisplay(){
       echo "<br>Frist Name is :".$this->FristName;
       echo "<br>Last Name is :".$this->LatName;
       echo "<br>Date of birth is :".$this->DOB;
       echo "<br>Address is :".$this->address;

   }
    public  function SearchByName($FirstName,$LastName){

        if($this->FristName==$FirstName && $this->LatName==$LastName){
            echo "<h1>Record  Found</h1>";
            echo "<br>Frist Name is :".$this->FristName;
            echo "<br>Last Name is :".$this->LatName;
            echo "<br>Date of birth is :".$this->DOB;
            echo "<br>Address is :".$this->address;
            echo "<br>Cell Number is :".$this->CellNumber;
        }
        else{
            echo "<h1>Record Not Found</h1>";
        }
    }
    public  function SearchByNumber($CellNumber){
       if ($this->CellNumber==$CellNumber){
           echo "<h1>Record  Found</h1>";
           echo "<br>Frist Name is :".$this->FristName;
           echo "<br>Last Name is :".$this->LatName;
           echo "<br>Date of birth is :".$this->DOB;
           echo "<br>Address is :".$this->address;
           echo "<br>Cell Number is :".$this->CellNumber;
       }
       else{
           echo "<h1>Record Not Found</h1>";
       }
    }
}

$FirstName="Muhammad";
$LastName="Kamran";
$DOB="15/7/1999";
$address="National Colony Mnawala Fsd";
$CellNumber="03177682979";
$ObjectOfAddressBook=new AddressBook($FirstName,$LastName,$DOB,$address,$CellNumber);
$ObjectOfAddressBook->AddressBookDisplay();
