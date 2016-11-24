<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/db/query/authenticate.php';

    function authenticate($userName, $password) {
        $isUserNameMatch = isUserNameMatch($userName);

        if (isUserNameMatch($userName) && isPasswordMatchForUserName($userName, $password)) {
            if () {

            }
        }
        return authenticate($userName, $password);
    }

    function isUserNameMatch($userName) {
        return is_user_name_match($userName);
    }
?>