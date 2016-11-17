<?php
function rebuildDB() {
    //dropTable();

    if (!isTableCreated('database_logs')) {
        echo '<div>added db log table</div>';
        createDatabaseLogTable();
    }

    if (!isTableCreated('user')) {
        createUserTable();
        addUsers();
    }

}

function addDatabaseLogs() {
    //$note, $sql, $params, $rowsAffected
    $databaseLog1 = new DatabaseLog('this is an insert or someting', 'create stuff from stuff', 'id:1,sql:stuff', '2');
    $databaseLog2 = new DatabaseLog('this is an insert or someting else', 'create more from stuff', 'id:2,sql:stuff', '4');
    $databaseLogs = array($databaseLog1, $databaseLog2);
    insertDatabaseLogs($databaseLogs);
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