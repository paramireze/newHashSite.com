
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
</head>

<body>
<?php

    include $_SERVER['DOCUMENT_ROOT'] . '/layout/inc_topNavigation.php';
    //include $_SERVER['DOCUMENT_ROOT'] . '/layout/inc_notification.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/' . $page_content;

    if ($params[0] == "home") {
        include $_SERVER['DOCUMENT_ROOT'] . '/layout/inc_dataDump.php';
    }
?>

</body>
</html>