<?php require_once 'core/init.php';?>

<?php


if(!isLoggedIn()){
redirect('index.php');
}

if (isset($_GET['type'])||(isset($_POST['balance_period']))){
    $balanceControler = new BalanceControler;
   if ($balanceControler->getDates()){
   $expenses = $balanceControler->getExpensesFromGivenPeriod();
   $balanceControler->addType($expenses,'Expense');

   $incomes = $balanceControler->getIncomesFromGivenPeriod();
   $balanceControler->addType($incomes,'Income');

   $Records = array_merge($expenses,$incomes);
   $balanceControler->addIds($Records);

   $firstDateToDisplay =  $balanceControler->firstDate;
   $lastDateToDisplay = $balanceControler->lastDate;

   $template = new Template('templates/balance.php');
   $template->typeHeader = "balance";
   $template->Records = $Records;
   $template->firstDateToDisplay = $firstDateToDisplay;
   $template->lastDateToDisplay = $lastDateToDisplay;
   echo $template;

   }else{
   redirect('mainMenu.php', 'Something went wrong with saving dates into database', 'error');
     print_r ($_GET['type']);
   }

} else {
    redirect('mainMenu.php');   
}

