<?php require_once 'core/init.php';?>

<?php


if(isLoggedIn()){
redirect('mainMenu.php');
}

$template = new Template('templates/frontpage.php');
$template->typeHeader = "index";

echo $template;