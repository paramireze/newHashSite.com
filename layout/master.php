<?php

// config file declaring doc environmental variables and db connection info
include $_SERVER['DOCUMENT_ROOT'] . '/config/testConfig.php';

// get the db connection and functions
include $_SERVER['DOCUMENT_ROOT'] . '/db/function.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/user_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/db/database_logs_functions.php';

// site wide functions
include $_SERVER['DOCUMENT_ROOT'] . '/function/common.php';

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Test</title>
    <meta name="description" content="Drinking Club With a Running Problem">
    <meta name="author" content="Nummy">

    <!-- bootstrap css/js framework -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <![endif]-->
</head>

<body>

<?php

    include $_SERVER['DOCUMENT_ROOT'] . '/layout/inc_topNavigation.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/layout/inc_notification.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/' . $page_content;
    include $_SERVER['DOCUMENT_ROOT'] . '/layout/inc_dataDump.php'; ?>

</body>
</html>