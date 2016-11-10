<?php

function create_activity_log_table() {
    $databaseConnection = dbConnection();
    $sql = "
         CREATE TABLE IF NOT EXISTS `test_madisonh3_com`.`activity_log` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `activity` VARCHAR(45) NULL,
          `created` TIMESTAMP,
          PRIMARY KEY (`id`));";

    do_pdo_query($databaseConnection, $sql, null);

}

?>