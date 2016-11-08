<?php

function getUsers() {

    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user";

    $sql['params'] = null;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

function getUser($userId) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user";

    $sql['params'] = null;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

function addUsers($user) {
    $databaseConnection = dbConnection();
    $sql['query'] = "insert into user values (default, ':firstName', ':lastName', ':hashName', ':email')";
    $sql['params'][':firstName']    = $user->firstName;
    $sql['params'][':lastName']     = $user->lastName;
    $sql['params'][':hashName']     = $user->hashName;
    $sql['params'][':email']        = $user->email;
    return do_pdo_query($databaseConnection, $sql, null);
}


?>