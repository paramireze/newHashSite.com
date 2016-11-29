<?php

    // include database accessor functions
    include $_SERVER['DOCUMENT_ROOT'] . '/db/function/auth_functions.php';

    function auth($params) {
        $page_content = null;
        switch($params[1]) {
            case null:
                $page_content = 'view/login/inc_loginFormPage.php';
                break;

            case "login":
                $page_content = 'view/login/inc_loginFormPage.php';
                break;

            case "logout":
                unsetUser();
                $page_content = home($params);
                break;

            case "authenticate":
                $page_content = 'process/authentication/login.php';

        }

        return $page_content;
    }

    function setUser($user) {
        $_SESSION['user'] = $user;
    }

    function unsetUser() {
        $_SESSION['user'] = null;
        unset($_SESSION['user']);
    }

?>