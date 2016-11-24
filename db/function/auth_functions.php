<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/db/query/authenticate.php';

    function authenticate($userName, $password) {

        if (isUserNameMatch($userName) && isPasswordMatchForUserName($userName, $password)) {
            return true;
        }
        return authenticate($userName, $password);
    }

    function isUserNameMatch($userName) {
        return is_user_name_match($userName);
    }
?>