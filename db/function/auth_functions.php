<?php

    //access the database queries
    include $_SERVER['DOCUMENT_ROOT'] . '/db/query/authenticate.php';

    function authenticate($userName, $password) {
        $isAuthenticated = false;
        if (isUserNameMatch($userName) && isPasswordMatchForUserName($userName, $password)) {
            $isAuthenticated = true;
        }
        return $isAuthenticated;
    }

    function isUserNameMatch($userName) {
        $result = is_user_name_match($userName);
        $result = $result->fetch();
        dumpData($result);
        die();
    }

    function isPasswordMatchForUserName($userName, $password) {
        $isAuthenticated = false;
        return $isAuthenticated;
    }
?>