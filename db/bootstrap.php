<?php
function rebuildDB() {

    createDatabaseLogTable();

    if (!isTableCreated('database_logs')) {
        echo '<div>added db log table</div>';
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
    $nummy  = new User('password', 'nummy',     'paul', 'ramirez', 'email@email.com');
    $fedora = new User('password', 'zerimar',   'bryan','ramirez', 'email@another.com');
    $sdv    = new User('password', 'steaming',  'jack', 'philiac', 'email@third.com');
    return array($nummy, $fedora, $sdv);
}       

?>