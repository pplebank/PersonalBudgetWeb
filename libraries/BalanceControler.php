
<?php require 'subclasses/DateGetter.php';?>
<?php require 'subclasses/DateChecker.php';?>
<?php require 'subclasses/AdditionalInfoAdder.php';?>


<?php

class BalanceControler
{

    private $db;
    public $firstDate;
    public $lastDate;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDates()
    {
        if (isset($_POST['balance_period'])){
        $dateChecker = new DateChecker;          
        if(($dateChecker->checkIfDateIsCorrect($_POST['firstDate']))&&($dateChecker->checkIfDateIsCorrect($_POST['lastDate']))){
         $this->firstDate =  $_POST['firstDate'];
         $this->lastDate =  $_POST['lastDate'];
         return true;
        }else{
            return false;
        }
     
     }
     
     else if(strcmp($_GET['type'],'lastMonth') == 0) {
        $dataGetter = new DateGetter;
        $this->firstDate = $dataGetter->firstDayLastMonth();
        $this->lastDate = $dataGetter->lastDayLastMonth();
        return true;
     } else if(strcmp($_GET['type'],'thisMonth') == 0) { 
        $dataGetter = new DateGetter;
        $this->firstDate = $dataGetter->firstDayThisMonth();
        $this->lastDate = $dataGetter->todaysDate();
        return true;
     }else if(strcmp($_GET['type'],'thisYear') == 0) { 
        $dataGetter = new DateGetter;
        $this->firstDate = $dataGetter->firstDayThisYear();
        $this->lastDate = $dataGetter->todaysDate();
        return true;
     }else if(strcmp($_GET['type'],'lastYear') == 0) {
        $dataGetter = new DateGetter;
        $this->firstDate = $dataGetter->firstDayLastYear();
        $this->lastDate = $dataGetter->lastDayLastYear();
        return true;
     } else {
         return false;
     }
}

public function getExpensesFromGivenPeriod(){

    $this->db->query("SELECT * FROM expenses
    WHERE id_user = :id AND date >= :firstdate AND date <= :lastdate");

        $this->db->bind(':id', $_SESSION['id_user']);
        $this->db->bind(':firstdate', $this->firstDate);
        $this->db->bind(':lastdate', $this->lastDate);

        $records = $this->db->resultset();

        return $records;
}

public function getIncomesFromGivenPeriod(){

    $this->db->query("SELECT * FROM incomes
    WHERE id_user = :id AND date >= :firstdate AND date <= :lastdate");

        $this->db->bind(':id', $_SESSION['id_user']);
        $this->db->bind(':firstdate', $this->firstDate);
        $this->db->bind(':lastdate', $this->lastDate);
        
        $records = $this->db->resultset();

        return $records;
}

public function addType($records, $typeName){
    $adder = new AdditionalInfoAdder; 
   $adder->addType($records, $typeName);
    }

 public function addIds($records){
    $adder = new AdditionalInfoAdder;
    $adder->assignUniqueIds($records);

}
}