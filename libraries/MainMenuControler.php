
<?php require 'subclasses/AdditionalInfoAdder.php';?>



<?php

class MainMenuControler
{

    private $db;
    private $lastExpenses = array();
    private $lastIncomes = array();

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLastExpenses()
    {

        $this->db->query("SELECT * FROM expenses
    WHERE id_user = :id ORDER BY date ASC LIMIT 3");

        $this->db->bind(':id', $_SESSION['id_user']);
        $records = $this->db->resultset();
        return $records;
    }

    public function getLastIncomes()
    {

        $this->db->query("SELECT * FROM incomes
WHERE id_user = :id ORDER BY date ASC LIMIT 3");

        $this->db->bind(':id', $_SESSION['id_user']);
        $records = $this->db->resultset();
        return $records;
    }

    public function addType($records, $typeName){
    $adder = new AdditionalInfoAdder; 
   $newDataSet = $adder->addType($records, $typeName);
        return $newDataSet;
    }

 public function addIds($records){
    $adder = new AdditionalInfoAdder;
    $adder->assignUniqueIds($records);

 }

}
