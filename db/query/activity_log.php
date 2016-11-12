<?php

function create_activity_log_table() {
    $databaseConnection = dbConnection();
    $sql = "
         CREATE TABLE IF NOT EXISTS `test_madisonh3_com`.`activity_log` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `activity` VARCHAR(300) NULL,
          `created` TIMESTAMP,
          `createdBy` VARCHAR(50),
          `url` VARCHAR(100),
          PRIMARY KEY (`id`));";

    return do_pdo_query($databaseConnection, $sql, null);
}

function check_table_exists($table) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SHOW TABLES LIKE :table";
    $sql['params'][':table'] = $table;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);

}

function get_all_activity_logs() {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM activity_log order by id desc";
    $sql['params'] = null;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

function create_activity($activity) {
    $databaseConnection = dbConnection();

    $sql['query'] = "INSERT INTO activity_log (id, activity, created, createdBy, url) 
                        VALUE (default, :activity, now(), '" . $_SESSION['user'] . "', '" . $_SERVER['REQUEST_URI'] . "')";
    $sql['params'][":activity"] = $activity;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

?>