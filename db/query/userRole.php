<?php

/*
 *
 */
function get_user_role($userId, $roleId) {
    echo "<h2>$userId and $roleId</h2>";
    $databaseConnection = dbConnection();
    $sql['query'] = "SELECT * FROM userRole where userId = :userId and roleId = :roleId";

    $sql['params'][':userId'] = $userId;
    $sql['params'][':roleId'] = $roleId;

    $result = do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
    return $result;

}

/*
 *
 */
function get_user_roles_by_id($userId) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM userRole where userId = :id";

    $sql['params'][':userId'] = $userId;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

/*
 *
 */
function get_user_roles_by_role($roleId) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM userRole where roleId = :roleId";

    $sql['params'][':id'] = $roleId;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}




/*
 *
 */
function create_user_role($userId, $roleId) {
    $databaseConnection = dbConnection();
    $sql['query'] = "insert into userRole (id, userId, roleId, created) values (default, :userId, :roleId, now())";

    $sql['params'][':userId']   = $userId;
    $sql['params'][':roleId']  = $roleId;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

/*
 *
 */
function create_user_role_table() {
    $databaseConnection = dbConnection();
    $sql = "
         CREATE TABLE IF NOT EXISTS `test_madisonh3_com`.`userRole` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `userId` VARCHAR(6) NULL,
          `roleId` VARCHAR(6)  NULL,
          `created` TIMESTAMP NOT NULL,
          PRIMARY KEY (`id`));";

    do_pdo_query($databaseConnection, $sql, null);
}


?>