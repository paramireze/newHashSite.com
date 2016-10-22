<h1>Hello Everybody. It is good to see you. I want to hear what you do when you're doing the things you do.</h1>
<?php
$users = getUsers();
foreach ($users as $user) {
    echo $user['first'] . ' - ' . $user['last'] . '<br />';
}

dropTable();
?>