<?php

    //access the database queries
    include $_SERVER['DOCUMENT_ROOT'] . '/db/query/authenticate.php';

    function isUserNameMatch($userName) {
        return is_user_name_match($userName);
    }

    function isValidCredentials($id, $password) {
        $password = hash('sha512', $password);
        return is_valid_credentials($id, $password);
    }
?>