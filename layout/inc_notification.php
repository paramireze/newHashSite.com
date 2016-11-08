<?php

// delete me later, this will not be used
$_SESSION['notification']['type'] = 'success';
$_SESSION['notification']['message'] = 'message';

if (isset($_SESSION['notification'])) {

    // assign locally and unset notification
    $notificationType = $_SESSION['notification']['type'];
    $notificationMessage = $_SESSION['notification']['message'];
    unset($_SESSION['notification']);

    echo "
    <div class='alert alert-$notificationType'>
        $notificationMessage
    </div>";
}
