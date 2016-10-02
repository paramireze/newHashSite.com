<?php
include '../config.php';
include SITE_ROOT . '/function/common.php';
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Test</title>
    <meta name="description" content="Drinking Club With a Running Problem">
    <meta name="author" content="Nummy">

    <link rel="stylesheet" href="">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body><?php

include($_SERVER['DOCUMENT_ROOT'] . '/' . $page_content);


if (!isProduction()) {

    echo '<h1>Session</h1>
          <pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo '<h1>Request</h1>
          <pre>';
    print_r($_REQUEST);
    echo '</pre>';

    echo '<h1>Server</h1>
          <pre>';
    print_r($_SERVER);
    echo '</pre>';

}
?>
</body>
</html>