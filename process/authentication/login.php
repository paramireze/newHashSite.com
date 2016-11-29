<?php
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if (empty($userName) || empty($password)) {
        //header('location: ' . SITE_URL . '404');
        exit('missing username or password');
    }

    dumpData($_POST);
    isUserNameMatch($userName);

?>