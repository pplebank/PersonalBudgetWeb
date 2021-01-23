<?php require_once 'core/init.php';?>

<?php

if (!isLoggedIn()) {
    redirect('index.php');
}



if ((isset($_POST['expense_add'])) || (isset($_POST['income_add']))) {

    $transaction = new TransactionControler;
    if ((isset($_POST['expense_add']))) {
        $transaction->setExpenseType();
        unset($_POST['expense_add']);
    } else {
        $transaction->setIncomeType();
        unset($_POST['income_add']);
    }
    $data = $transaction->getData();

    if ($transaction->isRequired()) {
        if ($transaction->isDateValid($data['date'])) {
            if ($transaction->isAmountValid($data['amount'])) {
                if ($transaction->isNoteValid($data['note'])) {
                    if ($transaction->registerTransaction($data)) {
                        redirect('mainMenu.php', 'Transaction added sucessfully', 'success');
                    } else {
                        redirect('mainMenu.php', 'Something went wrong with saving transaction into database', 'error');
                    }

                } else {
                    redirect('mainMenu.php', 'Invalid note format. Max. text length is 60 characters', 'error');
                }
            } else {
                redirect('mainMenu.php', 'Invalid amount format', 'error');
            }
        } else {
            redirect('mainMenu.php', 'This date is not operable by system, we support only dates starting from 2010 till today\'s date ', 'error');
        }
    } else {
        redirect('mainMenu.php', 'Please fill in all required fields', 'error');
    }
} else {
    redirect('mainMenu.php');
}
