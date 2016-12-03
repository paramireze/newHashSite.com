<?php

function home($params) {
    $page_content = null;
    switch($params[1]) {
        case null:
            $page_content = "/view/home/inc_home.php";
            include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');
            break;
    }
    return $page_content;
}

?>