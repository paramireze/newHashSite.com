<?php
include SITE_ROOT . '/db/query/database_log.php';

function createDatabaseLogTable() {
    echo '<div>hit</div>';
    return create_table_database_logs();

}

function isTableCreated($table) {
    $result = check_table_exists($table);
    return $result->rowCount() > 0;
}

function getAllDatabaseLogs() {
    $result = get_all_database_logs();
    foreach ($result->fetchAll() as $log) {
        echo '<pre>';
        print_r($log);
        echo '</pre>';
    }

}

function insertDatabaseLogs($logs) {
    foreach ($logs as $log) {
        $result = insertDatabaseLog($log);
        echo '<div>another hit</div>';
        if (!$result) {
            die('bad insert');
        }
    }
}


function insertDatabaseLog($databaseLog) {
    return insert_database_log($databaseLog);

}

?>