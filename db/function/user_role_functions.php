<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db/query/userRole.php';

function getUserRolesById($id) {
    $results = get_user_roles_by_id($id);
    return $results->fetchAll();
}

function getUserRolesByRole($roleId) {
    $result = get_user_roles_by_role($roleId);
    return $result->fetchAll();
}

function getUserRole($userId, $roleId) {
    $result = get_user_role($userId, $roleId);
    return $result->fetch();
}

function createUserRole($userId, $roleId) {
    echo '<pre>';
    echo 'user id: ' . $userId . ', role id: ' . $roleId . '<br />';
    echo '</pre>';
        $userRole = get_user_role($userId, $roleId);
        dumpData($userRole);
        return get_user_role($userId, $roleId) ? create_user_role($userId, $roleId) : null;
}

function createUserRoleTable() {
    create_user_role_table();
}

