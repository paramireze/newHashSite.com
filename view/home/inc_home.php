<h1>Test Website</h1>

<?php
setUser();
include $_SERVER['DOCUMENT_ROOT'] . '/db/bootstrap.php';

rebuildDB();
$users = getUsers();
$dbLogs = getAllDatabaseLogs();
echo "<h3>Display Users</h3>";
include $_SERVER['DOCUMENT_ROOT'] . '/view/users/inc_displayUsers.php';
echo "<h3>Display Logs</h3>";
include $_SERVER['DOCUMENT_ROOT'] . '/view/databaseLogs/inc_displayLogs.php';




?>