<?php
 require_once "loan.php";

class AutoLoan extends loan
{
    private  $customer;
    private  $acountType;

    function __construct($name, $loanNumber, $Amount,$customer,$acountType)
    {
        parent::__construct($name, $loanNumber, $Amount);
        $this->customer=$customer;
        $this->acountType=$acountType;
    }

    public function show()
    {
        echo "<br><h1>Result from the Autoloan  child Classes</h1>";
        echo "<br>Cutomer Name:".$this->customer;
        echo "<br>Account type of the Customer".$this->acountType;

    }

}

// mkaing the object of the child class

$customer="Muhammad Kamran";
$acountType="Saving";
$objectAutoloan=new AutoLoan($name,$loanNumber,$Amount,$customer,$acountType);
$objectAutoloan->Display();
$objectAutoloan->show();
