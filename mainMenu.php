<?php require_once 'core/init.php';?>

<?php

if (!isLoggedIn()) {
    redirect('index.php');
}

$template = new Template('templates/mainmenu.php');

//Display template
echo $template;