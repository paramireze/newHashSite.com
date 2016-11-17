<?php
function rebuildDB() {

    echo '<div>is table created? ' . isTableCreated('database_logs') . '</div>';

    if (!isTableCreated('database_logs')) {
        echo '<div>added db log table</div>';
        createDatabaseLogTable();
    }

    if (!isTableCreated('user')) {
        createUserTable();
        addUsers();
    }
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