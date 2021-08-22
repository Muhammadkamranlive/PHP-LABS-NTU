<?php
 require_once "AddressBook.php";

class Friend extends AddressBook
{
   private $NameofUniverity;
   private $Program;
   public function __construct($FirstName, $LastName, $DOB,$CellNumber, $address,$NameofUniverity,$Program)
   {
       parent::__construct($FirstName, $LastName, $DOB, $address,$CellNumber);
       $this->NameofUniverity=$NameofUniverity;
       $this->Program=$Program;
   }

   public  function FriendDisplay(){
       echo "<br>Friend Univesity Name is :".$this->NameofUniverity;
       echo "<br>Program in which he is studing:".$this->Program;
   }

}

$NameofUniverity="Nationa Textile Univesity";
$Program="BSSE";
$FirstName="Muhammad";
$LastName="Kamran";
$CellNumber="49549045";
echo "<h1>Data added</h1>";
$ObejctOfFirend= new Friend($FirstName,$LastName,$DOB,$address,$NameofUniverity,$Program,$CellNumber);

$ObejctOfFirend->AddressBookDisplay();
$ObejctOfFirend->FriendDisplay();
echo "<h1>Data sesarched by first Name and last Name</h1>";
$ObejctOfFirend->SearchByName($FirstName,$LastName);
echo "<h1>Data searched by  the  cellNumber</h1>";
$ObejctOfFirend->SearchByNumber($CellNumber);