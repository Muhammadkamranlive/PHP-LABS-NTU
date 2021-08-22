<?php

require_once "AddressBook.php";
class Relatives extends AddressBook
{
    private $relationshiptype;
    public function __construct($FirstName, $LastName, $DOB, $address,$CellNumber,$relationshiptype)
    {
        parent::__construct($FirstName, $LastName, $DOB, $address,$CellNumber);
        $this->relationshiptype=$relationshiptype;
    }

    public  function RelativeDispaly(){
        echo "<br>relationship type is";
    }
}
$FirstName="Muhammad";
$LastName="Kamran";
$CellNumber="49549045";
$relationshiptype="cousin";
echo "<h1>Data added</h1>";
$objectRelative= new Relatives($FirstName,$LastName,$DOB,$address,$relationshiptype,$CellNumber);
$objectRelative->AddressBookDisplay();
$objectRelative->RelativeDispaly();
echo "<h1>Data searchjed by first Name and last Name</h1>";
$objectRelative->SearchByName($FirstName,$LastName);
echo "<h1>Data seared by cell number</h1>";
$objectRelative->SearchByNumber($CellNumber);