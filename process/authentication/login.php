<?php

include $_SERVER['DOCUMENT_ROOT'] . '/db/do_pdo_query.php';
include $_SERVER['DOCUMENT_ROOT'] . '/function/common.php';

$userName = $_POST['userName'];
$password = $_POST['password'];

if (empty($userName) || empty($password)) {
    exit('missing username or password');
}

$userId = isUserNameMatch($userName);
$result = isValidCredentials($userId, $password);

if (empty($userId) || empty($result)) {
    setFailureMessage("Login Unsuccessful");
    header('location: ' . SITE_URL . 'auth/login');
}

setSuccessMessage();
header('location: ' . $_SESSION['redirect']);
?>