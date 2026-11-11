<?php

include("CarPolicy2.php");

$policyNumber = $_POST['policyNumber'];
$yearlyPremium = $_POST['yearlyPremium'];
$dateOfLastClaim = $_POST['dateOfLastClaim'];

$myCarpolicy = new CarPolicy($policyNumber, $yearlyPremium);

$myCarpolicy->setDateOfLastClaim($dateOfLastClaim);

echo "Policy: " . $myCarpolicy . "<br>";
echo "Years without a claim: " . $myCarpolicy->getTotalYearsNoClaims() . "<br>";
echo "Initial premium: €" . $yearlyPremium . "<br>";
echo "Discounted premium: €" . $myCarpolicy->getDiscountedPremium();

?>