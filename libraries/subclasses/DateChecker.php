
<?php

class DateChecker
{

public function checkIfDateIsCorrect($date){

    $minDate = new DateTime("2010-01-01");
    $maxDate = new DateTime('now');
    $enteredDate = new DateTime($date);

    if (($minDate <= $enteredDate)&&($maxDate >= $enteredDate)) {
        return true;
    } else{
        return false;
    }
}
}
