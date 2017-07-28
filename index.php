<?php
include '/home/paramireze/phpfunConfig.php';
include $_SERVER['DOCUMENT_ROOT'] . '/function/common.php';

// get the parameters in url string
$params = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
array_shift($params); // git rid of first item... null value

// access controllers
include $_SERVER['DOCUMENT_ROOT'] . '/controller/registeredControllers.php';

// call controller functions
switch($params[0])  {
    case "":
        home($params);
        break;

    case "home":
        home($params);
        break;

    case 'auth':
        auth($params);
        break;

    case 'profile':
        profile($params);
        break;

    case '404':
        $page_content = 'view/404.php';
        include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');
        break;

    default:
        header('location: ' . SITE_URL . '404');
        exit();
}


/* example code for grabbing a id
if (isset($params[1]) && ctype_digit($params[1])) {
    echo "<h3>" . $params[1] . "</h3>";
} */
?>