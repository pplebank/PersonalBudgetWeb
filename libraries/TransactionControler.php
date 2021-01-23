
<?php require 'subclasses/DateChecker.php';?>

<?php

class TransactionControler
{
    private $db;
    private $expenseType;
    private $incomeType;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function setExpenseType()
    {
            $this->expenseType = true;
    }

    public function setIncomeType()
    {
            $this->incomeType = true;
    }

    public function getData()
    {

        $data = array();
        $data['date'] = $_POST['date'];
        $data['amount'] = $_POST['amount'];
        $data['category'] = $_POST['category'];
        $data['note'] = $_POST['note'];

        if ($this->expenseType) {
            $data['payment'] = $_POST['payment'];
        }
        return $data;
    }

    public function isRequired()
    {
        if ($this->expenseType) {
            $requiredFields = array('date', 'amount', 'payment', 'category');
        } else {
            $requiredFields = array('date', 'amount','category');
        }
        foreach ($requiredFields as $field) {
            if ($_POST['' . $field . ''] == '') {
                return false;
            }
        }
        return true;
    }

public function isDateValid($date)
{
$dateChecker = new DateChecker;
 return $dateChecker->checkIfDateIsCorrect($date);
  
}


    public function isAmountValid($amount)
    {

        if (filter_var($amount, FILTER_VALIDATE_FLOAT)) {
            return true;
        } else {
            return false;
        }
    }

    public function isNoteValid($note)
    {

        if (strlen($note) <= 60) {
            return true;
        } else {
            return false;
        }
    }

    public function registerTransaction($data)
    {
        if ($this->expenseType) {
            $this->db->query('INSERT INTO expenses (id_user,date, amount, payment,category,note)
        VALUES (:id_user,:date, :amount,:payment,:category,:note)');

            $this->db->bind(':id_user', $_SESSION['id_user']);
            $this->db->bind(':date', $data['date']);
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':payment', $data['payment']);
            $this->db->bind(':category', $data['category']);
            $this->db->bind(':note', $data['note']);

        }else {
            $this->db->query('INSERT INTO incomes (id_user,date, amount, category,note)
            VALUES (:id_user,:date, :amount,:category,:note)');

            $this->db->bind(':id_user', $_SESSION['id_user']);
            $this->db->bind(':date', $data['date']);
            $this->db->bind(':amount', $data['amount']);
            $this->db->bind(':category', $data['category']);
            $this->db->bind(':note', $data['note']);
        }

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
