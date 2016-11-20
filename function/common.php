<?php

function isFirstTimeAtSite() {
    if (!isset($_COOKIE['firsttime'])) {
        setcookie("firsttime", "no", /* EXPIRE */);
    }
}

function isProduction() {
    return $_SESSION['production'];
}

function setUser() {
    $_SESSION['user'] = 'nummy';
}

function getTimeStamp() {
    return date("Y-m-d H:i:s");
}

function dumpData($data, $die = false) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';

    if ($die) {
        die();
    }

}

function MyAutoload($className){
    include_once(SITE_ROOT . '/class/class.' . $className . '.php');
}

spl_autoload_register('MyAutoload');

?>