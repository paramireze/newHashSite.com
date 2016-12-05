<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db/query/role.php';

function getRole($role) {
    return get_role($role);
}

function getRoleByAuthority($authority) {
    $result = get_role_by_authority($authority);
    return $result->fetch();
}

function createRole($role) {
    return create_role($role);
}

function createRoleTable() {
    create_role_table();
}

function addRolesToDB($roles) {
     foreach ($roles as $role) {
        if (!getRoleByAuthority($role->authority)) {
            $result = createRole($role);
            if (!$result) {
                die('bad insert');
            }
        }
    }
}


