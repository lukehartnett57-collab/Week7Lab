<?php

class CarPolicy
{
    public $policyNumber;
    public $yearlyPremium;
    public $dateOfLastClaim;

    public function __construct($policyNumber, $yearlyPremium)
    {
        $this->policyNumber = $policyNumber;
        $this->yearlyPremium = $yearlyPremium;
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
        return "PN: " . $this->policyNumber;
    }

    public function getDiscount()
{
    $years = $this->getTotalYearsNoClaims();

    if ($years >= 3 && $years <= 5) {
        return 0.10;
    } elseif ($years > 5) {
        return 0.15;
    } else {
        return 0;
    }
}

public function getDiscountedPremium()

{
    return $this->yearlyPremium - ($this->yearlyPremium * $this->getDiscount());
}

}