<?php

include $_SERVER['DOCUMENT_ROOT'] . '/db/do_pdo_query.php';
include $_SERVER['DOCUMENT_ROOT'] . '/function/common.php';

$userName = $_POST['userName'];
$password = $_POST['password'];

if (empty($userName) || empty($password)) {
    setFailureMessage("Missing Username or Password");
    header('location: ' . SITE_URL . 'auth/login');
}

$userId = getIdForUserName($userName);
if (empty($userId) || !isValidCredentials($userId, $password)) {
    setFailureMessage("Login Unsuccessful");
    header('location: ' . SITE_URL . 'auth/login');
}

session_regenerate_id();
setSuccessMessage('Welcome ');

?>