<h1>Test Website</h1>
<h3>don't judge me</h3>

<?php
setUser();
include SITE_ROOT . '/db/bootstrap.php';

rebuildDB();
$users = getUsers();
$dbLogs = getAllDatabaseLogs();

include SITE_ROOT . '/view/users/inc_displayUsers.php';
echo '<hr />';
include SITE_ROOT . '/view/databaseLogs/inc_displayLogs.php';




?>