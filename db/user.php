<?php

function getUsers() {

    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user";

    $sql['params'] = null;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

function addUsers($user) {
    $databaseConnection = dbConnection();
    $sql = "insert into user values (default, 'first', 'last', 'paramireze@gmail.com', 'nummy')";
    do_pdo_query($databaseConnection, $sql, null);
}


?>