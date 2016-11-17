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
          `status` VARCHAR(100) NULL,
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

function insert_database_log(DatabaseLog $dbLog) {

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
                        :rowsAffected,
                        :status);";
    $sql['params'][":note"]         = $dbLog->note;
    $sql['params'][":created"]      = $dbLog->created;
    $sql['params'][":createdBy"]    = $dbLog->createdBy;
    $sql['params'][":url"]          = $dbLog->url;
    $sql['params'][":sql"]          = $dbLog->sql;
    $sql['params'][":params"]       = $dbLog->params;
    $sql['params'][":server"]       = $dbLog->server;
    $sql['params'][":rowsAffected"] = $dbLog->rowsAffected;
    $sql['params'][":status"]       = $dbLog->status;


    $result = do_pdo_query($databaseConnection, $sql['query'], $sql['params']);

    return $dbLog; // send back the log for future use?
}

?>