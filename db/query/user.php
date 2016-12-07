<?php

/*
 *
 */
function get_users() {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user";
    $sql['params'] = null;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

/*
 *
 */
function get_user($id) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user where id = :id";

    $sql['params'][':id'] = $id;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

/*
 *
 */
function get_user_by_name($firstName, $lastName) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user where firstName = :firstName and lastName = :lastName";

    $sql['params'][':firstName'] = $firstName;
    $sql['params'][':lastName'] = $lastName;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

/*
 *
 */
function create_user($user) {
    $databaseConnection = dbConnection();
    $sql['query'] = "insert into user (id, password, firstName, lastName, userName, email, created, enabled) values (default, :password, :firstName, :lastName, :userName, :email, now(), :enabled)";
    $hashedPassword = hash('sha512',$user->getPassword());

    $sql['params'][':password']     = $hashedPassword;
    $sql['params'][':firstName']    = $user->firstName;
    $sql['params'][':lastName']     = $user->lastName;
    $sql['params'][':userName']     = $user->userName;
    $sql['params'][':email']        = $user->email;
    $sql['params'][':enabled']      = true;
    $result = do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
    if ($result) {
        return $databaseConnection->lastInsertId();
    } else {
        return null;
    }
}

/*
 *
 */
function create_user_table() {
    $databaseConnection = dbConnection();
    $sql = "
         CREATE TABLE IF NOT EXISTS `test_madisonh3_com`.`user` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `firstName` VARCHAR(45) NULL,
          `lastName` VARCHAR(45)  NULL,
          `email` VARCHAR(45) NOT NULL,
          `userName` VARCHAR(45) NOT NULL,
          `created` TIMESTAMP NOT NULL,
          `enabled` TINYINT(1) NOT NULL,
          `password` VARCHAR(300) NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE INDEX `email_UNIQUE` (`email` ASC));";

    do_pdo_query($databaseConnection, $sql, null);
}


?>