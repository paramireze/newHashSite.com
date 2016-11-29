<?php
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if (empty($userName) || empty($password)) {
        exit('missing username or password');
    }

    dumpData($_POST);
    $userId = isUserNameMatch($userName);

    if (!empty($userId)) {
        $result = isValidCredentials($userId, $password);
        echo $result == true ? 'Success' : 'failed!';
    } else {
        echo 'failed.';
    }

?>