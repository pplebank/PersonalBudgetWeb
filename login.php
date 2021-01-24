<?php include 'core/init.php';?>

<?php

if(isLoggedIn()){
    redirect('mainMenu.php');
    }


if (isset($_POST['do_login'])) {

    $login = new LoginControler;

    if ($login->isRequired()) {

    $data = $login->getData();

    if ($login->login($data)) {
        redirect('mainMenu.php', 'You have been logged in', 'success');
    } else {
        redirect('index.php', 'Login or password is not valid', 'error');
    }
}else{
    redirect('index.php', 'Fill all required fields', 'error');
}
} else {
    redirect('index.php');
}
