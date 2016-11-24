<?php

function isFirstTimeAtSite() {
    if (!isset($_COOKIE['firsttime'])) {
        setcookie("firsttime", "no");
    }
}

function setSuccessConfirmationMessage($message = "Successfully Submitted Form") {
    $_session['confirmation'] = array("type"=>"success", "message"=>$message);
}

function isProduction() {
    return $_SESSION['production'];
}

function getTimeStamp() {
    return date("Y-m-d H:i:s");
}

function isLoggedIn() {
    return isset($_SESSION['user']) && !empty($_SESSION['user']);
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
    include_once($_SERVER['DOCUMENT_ROOT'] . '/class/class.' . $className . '.php');
}

function isAuthenticated() {

}

spl_autoload_register('MyAutoload');

?>