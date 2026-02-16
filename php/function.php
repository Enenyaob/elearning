<?php
function generateMatricNumber($departmentCode, $previousYear, $year) {
    $serialNumber = rand(10000, 99999); // Generate a random 5-digit number
    $matricNumber = "NOUN/$departmentCode/$previousYear/$year/$serialNumber";
    return $matricNumber;
}
?>