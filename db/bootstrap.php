<?php
function rebuildDB() {
    //dropTable();
    createDatabaseLogsTable();
    if (isTableCreated('database_logs')) {
        addDatabaseLogs();
    }

    createUserTable();
    if (isTableCreated('log_database')) {
        addUsers();
    }

}

function addDatabaseLogs() {
    //$note, $sql, $params, $rowsAffected
    $databaseLog = new DatabaseLog($note, $sql, $params, $rowsAffected);

}

function dropTable() {
    $databaseConnection = dbConnection();
    $sql = "drop table user;";
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