<?php

class CarPolicy
{
 public $policyNumber;
 public $yearlyPremium;
 public $dateOfLastClaim;

 public function __construct($policyNumber, $yearlyPremium, $dateOfLastClaim)
 {
     $this->policyNumber = $policyNumber;
     $this->yearlyPremium = $yearlyPremium;
     $this->dateOfLastClaim = $date;
    
 }
}