<?php

    // include database accessor functions
    include $_SERVER['DOCUMENT_ROOT'] . '/db/function/auth_functions.php';

    function auth($params) {
        $page_content = null;
        switch($params[1]) {
            case null:
                $page_content = 'view/login/inc_loginFormPage.php';
                include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');
                break;

            case "login":
                $page_content = 'view/login/inc_loginFormPage.php';
                include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');
                break;

            case "logout":
                unsetUser();
                $page_content = home($params);
                include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');
                break;

            case "authenticate":
                $redirect = isset($_POST['redirect']) ? $_POST['redirect'] : SITE_URL . 'home';
                include($_SERVER['DOCUMENT_ROOT'] . '/process/authentication/login.php');
                header('location: ' . $redirect);
                exit();

        }
    }

    function setUser($user) {
        $_SESSION['user'] = $user;
    }

    function unsetUser() {
        $_SESSION['user'] = null;
        unset($_SESSION['user']);
    }

?>