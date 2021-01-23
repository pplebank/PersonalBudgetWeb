
<?php

class DateGetter
{


public function todaysDate(){
 $date = new DateTime('now');    
    return $date->format('Y-m-d');
}

public function firstDayLastMonth(){
    $date = new DateTime(); 
    $date->modify('first day of -1 month');
    return $date->format('Y-m-d');

}

public function lastDayLastMonth(){
    $date = new DateTime(); 
    $date->modify('last day of -1 month');
    return $date->format('Y-m-d');
    
}

public function firstDayThisMonth(){
    $date = new DateTime(); 
    $date->modify('first day of -0 month');
    return $date->format('Y-m-d');
}

public function firstDayThisYear(){
    $date = new DateTime(); 
    $date->modify('first day of -0 year');
    return $date->format('Y-m-d');
    
}
public function firstDayLastYear(){
    $date = new DateTime(); 
    $date->modify('first day of -1 year');
    return $date->format('Y-m-d');
    
}

public function lastDayLastYear(){
    $date = new DateTime(); 
    $date->modify('last day of december last year');
    return $date->format('Y-m-d');
    
}

}