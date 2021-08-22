<?php
require_once "loan.php";

class HomeLoan extends loan
{
   private  $Bank;
   private  $ManagerName;
   function  __construct($name, $loanNumber, $Amount,$Bank,$ManagerName)
   {
       parent::__construct($name, $loanNumber, $Amount);
       $this->Bank=$Bank;
       $this->ManagerName=$ManagerName;
   }
   public function  HomeDisplay(){
       echo "<br><h1>Home Loan running</h1>";
       echo "<br>Bank Name".$this->Bank;
       echo "<br>Manager Name".$this->Bank;
   }
}
$name="Kamran";
$loanNumber="18-NTU-1130";
$Amount=1949494 ;
$Bank="Alied Bank Manwalawa";
$ManagerName="Qasim Khan";
$ObejctHome=new HomeLoan($name,$loanNumber,$Amount,$Bank,$ManagerName);
$ObejctHome->Display();
$ObejctHome->HomeDisplay();