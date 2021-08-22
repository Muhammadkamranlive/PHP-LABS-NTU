<?php


class loan
{
   protected $name;
   protected $loanNumber;
   protected $Amount;
    public function __construct($name,$loanNumber,$Amount) {
        $this->nam = $name;
        $this->loanNumber = $loanNumber;
        $this->Amount=$Amount;
    }
    public function Display() {
        echo "<h1>Parent Loan classs Display function</h1>";
        echo "<br>Name of the Loan".$this->name;
        echo "<br> Sequence Number is ".$this->loanNumber;
        echo "<br>Amount of the Loan".$this->Amount;
    }

}
  $name="Kamran";
  $loanNumber="18-NTU-1130";
  $Amount=1949494 ;
  $ObjLoan= new loan($name,$loanNumber,$Amount);






