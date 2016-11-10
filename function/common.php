<?php
function isProduction() {
    return $_SESSION['production'];
}

function MyAutoload($className){
    include_once(SITE_ROOT . '/class/class.' . $className . '.php');
}

function populatePeople() {
    $nummy  = new User('nummy', 'paul', 'ramirez', 'email@email.com');
    $fedora = new User('zerimar', 'bryan', 'ramirez', 'email@another.com');
    $sdv    = new User('steaming dog vomit', 'jack', 'philiac', 'email@third.com');
    return array($nummy, $fedora, $sdv);
}

function addPeopleToDB($people) {

    $people = populatePeople();

    foreach ($people as $person) {
        if (!getUserByName($person->firstName, $person->lastName)) {
            $result = createUser($person);
            if (!$result) {
                die('bad insert');
            }
        }
    }
    
}

spl_autoload_register('MyAutoload');

?>