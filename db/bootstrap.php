<?php
function rebuildDB() {
    dropTable();
    //buildDB();
    //addUsers();
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
          `first` VARCHAR(45) NULL,
          `last` VARCHAR(45) NULL,
          `email` VARCHAR(45) NULL,
          `hashName` VARCHAR(45) NULL,
          PRIMARY KEY (`id`),
          UNIQUE INDEX `email_UNIQUE` (`email` ASC));
    ";

    do_pdo_query($databaseConnection, $sql, null);
}

function addUser() {
    $databaseConnection = dbConnection();
    $sql = "INSERT IGNORE INTO `test_madisonh3_com`.`user`
            SET `ensembl_transcript_id` = ‘ENSORGT00000000001′,
              `transcript_chrom_start` = 12345,
              `transcript_chrom_end` = 12678";
}

?>