<h1>Hello Everybody. It is good to see you. I want to hear what you do when you're doing the things you do.</h1>
<div>let me know if I can help in anyway</div>
<?php
//buildDB();
$users = getUsers();
echo '<pre>';
 print_r($users->fetchAll());
echo '</pre>';





$nummy = new User('nummy', 'paul', 'ramirez', 'email@email.com');

$fedora = new User('zerimar', 'bryan', 'ramirez', 'email@another.com');
$sdv = new User('steaming dog vomit', 'jack', 'philiac', 'email@third.com');
$people = array($nummy, $fedora, $sdv);

foreach ($people as $person) {
    foreach ($users as $user) {
        if ($person->getHashName == $user->getHashName) {
            echo '<div>hit</div>';
        } else {
            echo '<div>miss</div>';
        }
    }
}


die();
$hashEvent1 = new Event($nummy, "Nummy's hash Run", "Aug 5th, 2016", "it will be great!");

echo '<pre>';
print_r($hashEvent1);
echo '</pre>';

echo '<pre>';
print_r($nummy);
echo '</pre>';
?>