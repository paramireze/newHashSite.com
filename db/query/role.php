<?php

/*
 *
 */
function get_role($id) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM role where id = :id";

    $sql['params'][':id'] = $id;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

/*
 *
 */
function get_role_by_authority($authority) {
    $databaseConnection = dbConnection();
    $sql['query'] = "SELECT * FROM role where authority = :authority";

    $sql['params'][':authority'] = $authority;
    $result = do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
    return $result;

}

/*
 *
 */
function get_role_by_name($firstName, $lastName) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user where firstName = :firstName and lastName = :lastName";

    $sql['params'][':firstName'] = $firstName;
    $sql['params'][':lastName'] = $lastName;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

/*
 *
 */
function create_role($role) {
    $databaseConnection = dbConnection();
    $sql['query'] = "insert into role (id, authority, created, enabled) values (default, :authority, now(), true)";

    $sql['params'][':authority']    = $role->authority;

    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

/*
 *
 */
function create_role_table() {
    $databaseConnection = dbConnection();
    $sql = "
         CREATE TABLE IF NOT EXISTS `test_madisonh3_com`.`role` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `authority` VARCHAR(45) NULL,
          `created` TIMESTAMP NOT NULL,
          `enabled` TINYINT(1) NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE INDEX `authority_UNIQUE` (`authority` ASC));";

    do_pdo_query($databaseConnection, $sql, null);
}
?>