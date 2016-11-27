<?php

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
                $userName = $_POST['userName'];
                $password = $_POST['password'];

                if (!empty($userName) && !empty($password)) {
                    $page_content = 'process/authentication/login.php';
                } else {

                    //$_SESSION["confirmation"]["type"] = "fail";
                    //$_SESSION["confirmation"]["message"] = "Missing Username or password";
                    header('location: ' . SITE_URL . '404');
                    exit();
                }

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