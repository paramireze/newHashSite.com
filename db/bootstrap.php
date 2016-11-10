<?php
function rebuildDB() {
    //dropTable();
    buildDB();
    addUsers();
}

function dropTable() {
    $databaseConnection = dbConnection();
    $sql = "drop table user;";
    do_pdo_query($databaseConnection, $sql, null);
}

function buildDB() {
    $databaseConnection = dbConnection();
    $sql = "
         CREATE TABLE IF NOT EXISTS `test_madisonh3_com`.`user` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `firstName` VARCHAR(45) NULL,
          `lastName` VARCHAR(45) NULL,
          `email` VARCHAR(45) NULL,
          `hashName` VARCHAR(45) NULL,
          PRIMARY KEY (`id`),
          UNIQUE INDEX `email_UNIQUE` (`email` ASC));";

    do_pdo_query($databaseConnection, $sql, null);
}

function addUsers() {

    $people = populatePeople();

    addPeopleToDB($people);

}

function populatePeople() {
    $nummy  = new User('nummy', 'paul', 'ramirez', 'email@email.com');
    $fedora = new User('zerimar', 'bryan', 'ramirez', 'email@another.com');
    $sdv    = new User('steaming dog vomit', 'jack', 'philiac', 'email@third.com');
    return array($nummy, $fedora, $sdv);
}


?>