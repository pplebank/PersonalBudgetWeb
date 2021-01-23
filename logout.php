<?php include 'core/init.php';?>

<?php

if (isLoggedIn()) {
    $loginControler = new LoginControler;
    $loginControler->logoutUser();
    redirect('index.php', 'You logged out successfully', 'success');
}else{
    redirect('index.php');
}
