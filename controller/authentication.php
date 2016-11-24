<?php

    function auth($params) {
        $page_content = null;
        switch($params[1]) {
            case null:
                $page_content = 'view/login/inc_loginFormPage.php';
                break;
            case "login":
                $page_content = '/formSubmits/login/process.php';
                
                break;
            case "logout":

                $page_content = home($params);
                break;
        }
        return $page_content;
    }

    function setUser($user) {
        $_SESSION['user'] = $user;
    }

    function unsetUser() {
        // doubly make sure
        $_SESSION['user'] = null;
        unset($_SESSION['user']);
    }

?>