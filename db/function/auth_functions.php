<?php

    //access the database queries
    include $_SERVER['DOCUMENT_ROOT'] . '/db/query/authenticate.php';

    function getIdForUserName($userName) {
        return get_id_for_username($userName);
    }

    function isValidCredentials($id, $password) {
        $password = hash('sha512', $password);
        return is_valid_credentials($id, $password);
    }
?>
