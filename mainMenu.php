<?php require_once 'core/init.php';?>

<?php

if (!isLoggedIn()) {
    redirect('index.php');
}

$menuControler = new MainMenuControler;
$lastExpenses = $menuControler->getLastExpenses();
$menuControler->addType($lastExpenses,'Expense');

$lastIncomes = $menuControler->getLastIncomes();
$menuControler->addType($lastIncomes,'Income');

$Records = array_merge($lastExpenses,$lastIncomes);
$menuControler->addIds($Records);

$template = new Template('templates/mainmenu.php');

$template->Records = $Records;
$template->typeHeader = "mainmenu";

echo $template;
