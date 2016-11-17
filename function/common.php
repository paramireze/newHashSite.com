<?php

function isProduction() {
    return $_SESSION['production'];
}

function setUser() {
    $_SESSION['user'] = 'nummy';
}

function getTimeStamp() {
    return date("Y-m-d H:i:s");
}


function MyAutoload($className){
    include_once(SITE_ROOT . '/class/class.' . $className . '.php');
}

spl_autoload_register('MyAutoload');

?>