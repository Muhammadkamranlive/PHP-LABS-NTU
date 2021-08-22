<?php
require_once "AddressBook.php";

class Colleages extends AddressBook
{
    private  $designation;
    private  $companyName;
    public function __construct($FirstName, $LastName, $DOB, $address,$CellNumber,$designation,$companyName)
    {
        parent::__construct($FirstName, $LastName, $DOB, $address,$CellNumber);
        $this->companyName=$companyName;
        $this->designation=$designation;
    }

    public  function CollegesDisplay(){
        echo "<br>designation".$this->designation;
        echo "<br>comapany Name".$this->companyName;
    }

}
echo "<h1>Data added</h1>";
$designation="stundetn";
$companyName="uni study";
$FirstName="Ahmad";
$LastName="Ali";
$CellNumber="03177682979";
$obejctColleages= new Colleages($FirstName,$LastName,$DOB,$address,$designation,$companyName,$CellNumber);
$obejctColleages->AddressBookDisplay();
$obejctColleages->CollegesDisplay();
echo "<h1>Data Searched by the first Name amnd last Name</h1>";
$obejctColleages->SearchByName($FirstName,$LastName);
echo "<h1>Data searched by the cell Number</h1>";
$obejctColleages->SearchByNumber($CellNumber);