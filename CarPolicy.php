<?php

class CarPolicy 
{
    private $policyNumber = "";
    private $yearlyPremium = "";
    private $dateOfLastClaim = "";

    public function __construct($PNumber, $YPremium)
    {
        $this->policyNumber = $PNumber;
        $this->yearlyPremium = $YPremium;
    }

    public function setDateOfLastClaim($date)
    {
        $this->dateOfLastClaim = $date;
    }

    public function getTotalYearsNoClaims()
    {
        $currentDate = new DateTime();
        $lastDate = new DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }

    public function __toString()
    {
        return "Policy Number: " . $this->policyNumber . 
               ", Yearly Premium: " . $this->yearlyPremium . 
               ", Date of Last Claim: " . $this->dateOfLastClaim;
    }
}

?>







