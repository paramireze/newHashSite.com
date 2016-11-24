<?php
// config file declaring doc environmental variables and db connection info
include $_SERVER['DOCUMENT_ROOT'] . '/config/testConfig.php';

// get the db connection and functions
include $_SERVER['DOCUMENT_ROOT'] . '/db/function.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/function/user_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/function/database_logs_functions.php';

// site wide functions
include $_SERVER['DOCUMENT_ROOT'] . '/function/common.php';
include $_SERVER['DOCUMENT_ROOT'] . '/view/login.php';


$params = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
array_shift($params);

switch($params[0])  {
    case 'home':
        $page_content = "/view/home/inc_home.php";
        break;
    case 'login':
        $page_content = auth($params);
        break;
}

include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');


/* example code for grabbing a id
if (isset($params[1]) && ctype_digit($params[1])) {
    echo "<h3>" . $params[1] . "</h3>";
} */
?>