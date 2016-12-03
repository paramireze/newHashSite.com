<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/db/do_pdo_query.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/function/common.php';

    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if (empty($userName) || empty($password)) {
        exit('missing username or password');
    }

    $userId = isUserNameMatch($userName);


    if (!empty($userId)) {
        $result = isValidCredentials($userId, $password);
        //echo $result == true ? 'Success' : 'failed!';
    } else {
        
        header('location: ' . SITE_URL . 'auth/login');
    }



?>