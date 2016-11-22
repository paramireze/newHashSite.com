<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db/query/database_log.php';

function createDatabaseLogTable() {
    return create_table_database_logs();
}

function isTableCreated($table) {
    $result = check_table_exists($table);
    return $result->rowCount() > 0;
}

function getAllDatabaseLogs() {
    $result = get_all_database_logs();
    return $result->fetchAll();
}

function insertDatabaseLogs($logs) {
    foreach ($logs as $log) {
        $result = insertDatabaseLog($log);

        if (!$result) {
            die('bad insert');
        }
    }
}

function updateDatabaseLog($databaseLog) {
    return update_database_log($databaseLog);
}


function insertDatabaseLog($databaseLog) {
    return insert_database_log($databaseLog);

}

?>