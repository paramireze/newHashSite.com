<?php

function home($params) {
    $page_content = null;
    switch($params[1]) {
        case null:
            $page_content = "/view/home/inc_home.php";
            break;
    }
    return $page_content;
}

?>