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
    $sql['query'] = "insert into user (id, password, firstName, lastName, hashName, email) values (default, :password, :firstName, :lastName, :hashName, :email)";
    //$sql['params'][':password']     = $user->getPassword();
    $sql['params'][':password']     = $user->getPassword();
    $sql['params'][':firstName']    = $user->firstName;
    $sql['params'][':lastName']     = $user->lastName;
    $sql['params'][':hashName']     = $user->hashName;
    $sql['params'][':email']        = $user->email;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

/*
 *
 */
function create_user_table() {
    $databaseConnection = dbConnection();
    $sql = "
         CREATE TABLE IF NOT EXISTS `test_madisonh3_com`.`user` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `password` VARCHAR(300) NULL,
          `firstName` VARCHAR(45) NULL,
          `lastName` VARCHAR(45) NULL,
          `email` VARCHAR(45) NULL,
          `hashName` VARCHAR(45) NULL,
          PRIMARY KEY (`id`),
          UNIQUE INDEX `email_UNIQUE` (`email` ASC));";

    do_pdo_query($databaseConnection, $sql, null);
}


?>