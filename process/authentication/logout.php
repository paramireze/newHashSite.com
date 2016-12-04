<?php
include $_SERVER['DOCUMENT_ROOT'] . '/function/common.php';

if (isLoggedIn()) {
    $redirect = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : SITE_URL . 'home';
    header('location: ' . $redirect);
    exit();
}

$page_content = 'view/login/inc_loginFormPage.php';
include($_SERVER['DOCUMENT_ROOT'] . '/layout/master.php');
?>