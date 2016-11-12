<?php
include SITE_ROOT . '/db/query/activity_log.php';

function createActivityLogTable() {
    $result = create_activity_log_table();
    echo '<pre>';
    print_r($result);
    echo '</pre>';
    if (isTableCreated('activity_log')) {
        createActivity($result->queryString);
    }
}

function isTableCreated($table) {
    $result = check_table_exists($table);
    return $result->rowCount() > 0;
}

function getAllActivities() {
    $result = get_all_activity_logs();
    foreach ($result->fetchAll() as $log) {
        echo '<pre>';
        print_r($log);
        echo '</pre>';
    }

}

function createActivity($activity) {
    $result = create_activity($activity);
}

?>