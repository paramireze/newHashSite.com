<?php
function rebuildDB() {
    //dropTable();
    buildActivityLogDB();
    
    buildUserDB();
    addUsers();
}

function dropTable() {
    $databaseConnection = dbConnection();
    $sql = "drop table user;";
    do_pdo_query($databaseConnection, $sql, null);
}

function buildActivityLogDB() {
    createActivityLogTable();
}


function buildUserDB() {
    createUserTable();
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