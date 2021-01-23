<?php require_once 'core/init.php';?>

<?php

if(isLoggedIn()){
    redirect('mainMenu.php');
    }

if (isset($_POST['signUpForm'])) {
    $register = new RegisterControler;

    $data = $register->getData();

    if ($register->isRequired()) {
        if (!$register->isLoginAlreadyUsed($data['username'])) {
            if (!$register->isMailAlreadyUsed($data['email'])) {
                if ($register->isValidEmail($data['email'])) {
                    if ($register->passwordsMatch($data['password'], $data['password2'])) {

                        if ($register->registerUser($data)) {
                            redirect('index.php', 'You are registered and can now log in', 'success');
                        } else {
                            redirect('index.php', 'Something went wrong with registration', 'error');
                        }
                    } else {
                        redirect('index.php', 'Your passwords did not match', 'error');
                    }
                } else {
                    redirect('index.php', 'Please use a valid email address', 'error');
                }
            } else {
                redirect('index.php', 'Mail is already used', 'error');
            }
        } else {
            redirect('index.php', 'Login is already used', 'error');
        }
    } else {
        redirect('index.php', 'Please fill in all required fields', 'error');
    }
}else{
    redirect('index.php');
}
