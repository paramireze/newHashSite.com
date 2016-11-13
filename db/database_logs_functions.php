<?php
include SITE_ROOT . '/db/query/database_log.php';

function createDatabaseLogTable() {
    $result = create_table_database_logs();
    echo '<pre>';
    print_r($result);
    echo '</pre>';
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

function insertDatabaseLog($databaseLog) {
    $result = insert_database_log($databaseLog);
}

?>