<?php

function logs($params) {
    $page_content = null;
    switch($params[1]) {
        case null:
            $page_content = "/view/databaseLogs/inc_displayLogs.php";
            include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');
            break   ;
    }
    return $page_content;
}

?>