<?php
function rebuildDB() {


    if (!isTableCreated('database_logs')) {
        // tables
        createDatabaseLogTable();
        createUserTable();
        createRoleTable();
        createUserRoleTable();

        $userRoleId = createRole(new Role('user'));
        $adminRoleId = createRole(new Role('admin'));
        $hashRoleId = createRole(new Role('hasher'));


        // create user and add user to admin role
        $nummy = new User('password', 'nummy', 'paul', 'ramirez', 'email@email.com');
        if (!getUserByName($nummy->firstName, $nummy->lastName)) {
            $nummyId = createUser($nummy);
            if (!$nummyId) {
                die('bad insert');
            }

            $result = createUserRole($nummyId, $adminRoleId);
            if (!$result) {
                echo '<h3>failed insert user role</h3>';
            }
        }

        // create user and add user to user role
        $bryan = new User('password', 'zerimar', 'bryan', 'ramirez', 'email@another.com');
        if (!getUserByName($nummy->firstName, $nummy->lastName)) {
            $bryanId = createUser($bryan);
            if (!$bryanId) {
                die('bad insert');
            }

            $result = createUserRole($bryanId, $userRoleId);
            if (!$result) {
                echo '<h3>failed insert user role</h3>';
            }
        }

        // create user and add user to hash role
        $sdv = new User('password', 'steaming', 'jack', 'philiac', 'email@third.com');
        if (!getUserByName($sdv->firstName, $sdv->lastName)) {
            $sdvId = createUser($sdv);
            if (!$sdvId) {
                die('bad insert');
            }

            $result = createUserRole($sdvId, $hashRoleId);
            if (!$result) {
                echo '<h3>failed insert user role</h3>';
            }
        }
    }
}

function dropTable() {
    $databaseConnection = dbConnection();
    $sql = "drop table user;";
    do_pdo_query($databaseConnection, $sql, null);
}

?>