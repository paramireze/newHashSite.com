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
    create_user_table();
}

function addPeopleToDB($people) {
    foreach ($people as $person) {
        if (!getUserByName($person->firstName, $person->lastName)) {
            $result = createUser($person);
            if (!$result) {
                die('bad insert');
            }
        }
    }
}

ß
?>