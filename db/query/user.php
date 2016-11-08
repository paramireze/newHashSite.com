<?php

function get_users() {

    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user";

    $sql['params'] = null;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

function get_user($id) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user where id = :id";

    $sql['params'][':id'] = $id;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

function get_user_by_name($firstName, $lastName) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user where firstName = :firstName and lastName = :lastName";

    $sql['params'][':firstName'] = $firstName;
    $sql['params'][':lastName'] = $lastName;
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