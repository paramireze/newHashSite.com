<h1>Hello Everybody. It is good to see you. I want to hear what you do when you're doing the things you do.</h1>
<div>let me know if I can help in anyway</div>
<?php
buildDB();
$users = getUsers();
foreach ($users as $user) {
    echo $user['first'] . ' - ' . $user['last'] . '<br />';
}

dropTable();
?>