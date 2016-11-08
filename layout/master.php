<?php

// config file declaring doc site_root and other stuff
include '../testConfig.php';

// get the db connection and functions
include SITE_ROOT . '/db/user.php';
include SITE_ROOT . '/db/bootstrap.php';
include SITE_ROOT . '/db/function.php';

// site wide functionss
include SITE_ROOT . '/function/common.php';

// makes including classes much easier
function __autoload($class_name) {
    require_once "./class/class.".$class_name.".php";
}

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Test</title>
    <meta name="description" content="Drinking Club With a Running Problem">
    <meta name="author" content="Nummy">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body><?php

    include SITE_ROOT . '/layout/inc_notification.php';
    include SITE_ROOT . '/' . $page_content;
    include SITE_ROOT . '/layout/inc_dataDump.php'; ?>

</body>
</html>