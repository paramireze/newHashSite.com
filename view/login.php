<?php

function auth($params) {
    $page_content = null;
    switch($params[1]) {
        case null:
            $page_content = 'view/login/inc_loginFormPage.php';
            break;
        case "auth":
            $page_content = '/formSubmits/login/process.php';
    }
    return $page_content;
}

?>