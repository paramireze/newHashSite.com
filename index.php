<?php
// config file declaring doc environmental variables and db connection info
include $_SERVER['DOCUMENT_ROOT'] . '/config/testConfig.php';

// access controllers
include $_SERVER['DOCUMENT_ROOT'] . '/controller/registeredControllers.php';

// get the db connection and functions
include $_SERVER['DOCUMENT_ROOT'] . '/db/function.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/function/user_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/function/database_logs_functions.php';
// site wide functions
include $_SERVER['DOCUMENT_ROOT'] . '/function/common.php';


$params = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
array_shift($params); // git rid of first item... null value
switch($params[0])  {
    case "":
        $page_content = home($params);
        break;

    case "home":
        $page_content = home($params);
        break;

    case 'auth':
        $page_content = auth($params);
        break;

    case 'profile':
        $page_content = profile($params);
        break;

    default:
        header($_SERVER['DOCUMENT_ROOT']);

}

if (!empty($page_content)) {
    include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');
}

/* example code for grabbing a id
if (isset($params[1]) && ctype_digit($params[1])) {
    echo "<h3>" . $params[1] . "</h3>";
} */
?>