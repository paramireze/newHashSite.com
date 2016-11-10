<?php
include SITE_ROOT . '/db/query/user.php';

function getUsers() {
    return get_users();
}

function getUser($id) {
    $result = get_user($id);

    return !empty($result) ? true : false;
}

function getUserByName($firstName, $lastName) {
    $result = get_user_by_name($firstName, $lastName);
    return $result->fetch();
}

function createUser($user) {
    return create_user($user);
}

function createUserTable() {
    $result = null;
    if (!doesTableExists('user')) {
        $result = create_user_table();
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }

    return $result;
}

?>