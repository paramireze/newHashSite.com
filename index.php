<?php include $_SERVER['DOCUMENT_ROOT'] . '/config/testConfig.php';
$params = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
array_shift($params); // git rid of first item... null value

// access controllers
include $_SERVER['DOCUMENT_ROOT'] . '/controller/registeredControllers.php';

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
        header('location: ' . SITE_URL);
        exit();
}



if (!empty($page_content)) {
    include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');
} else {
    echo 'failed conditional';
}

/* example code for grabbing a id
if (isset($params[1]) && ctype_digit($params[1])) {
    echo "<h3>" . $params[1] . "</h3>";
} */
?>