<?php include 'core/init.php';?>

<?php

if(isLoggedIn()){
    redirect('mainMenu.php');
    }


if (isset($_POST['do_login'])) {

    $login = new LoginControler;
    $data = $login->getData();

    if ($login->login($data)) {
        redirect('mainMenu.php', 'You have been logged in', 'success');
    } else {
        redirect('index.php', 'That login is not valid', 'error');
    }
} else {
    redirect('index.php');
}
