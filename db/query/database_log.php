<?php

function create_table_database_logs() {
    // $sql, $params, $rowsAffected
    $databaseConnection = dbConnection();
    $sql = "
         CREATE TABLE IF NOT EXISTS `test_madisonh3_com`.`database_logs` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `created` TIMESTAMP,
          `createdBy` VARCHAR(50),
          `note` VARCHAR(500) NULL,
          `url` VARCHAR(100),
          `sql` VARCHAR(300),
          `params` VARCHAR(500) NULL,
          `server` VARCHAR(300) NULL,
          `rowsAffected` VARCHAR(10) NULL,
          PRIMARY KEY (`id`));";

    return do_pdo_query($databaseConnection, $sql, null);
}

function check_table_exists($table) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SHOW TABLES LIKE :table";
    $sql['params'][':table'] = $table;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);

}

function get_all_database_logs() {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM database_logs order by id desc";
    $sql['params'] = null;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

function insert_database_log(DatabaseLog $databaseLog) {
    echo '<pre>';
    print_r($databaseLog);
    echo '</pre>';
    $databaseConnection = dbConnection();

    $sql['query'] = "INSERT INTO database_logs (id, created, createdBy, note, url, `sql`, params, server, rowsAffected) 
                        VALUES (default,                          
                        :created, 
                        :createdBy, 
                        :note, 
                        :url,
                        :sql,
                        :params,
                        :server,
                        :rowsAffected);";
    $sql['params'][":note"]         = $databaseLog->note;
    $sql['params'][":created"]      = $databaseLog->created;
    $sql['params'][":createdBy"]    = $databaseLog->createdBy;
    $sql['params'][":url"]          = $databaseLog->url;
    $sql['params'][":sql"]          = $databaseLog->sql;
    $sql['params'][":params"]       = $databaseLog->params;
    $sql['params'][":server"]       = $databaseLog->server;
    $sql['params'][":rowsAffected"] = $databaseLog->rowsAffected;


    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

?>