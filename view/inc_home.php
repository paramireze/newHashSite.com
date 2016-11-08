<h1>Pauls Awesome Page</h1>
<div>Suck it!</div>
<?php


$people = populatePeople();

foreach ($people as $person) {
    //$user = getUserByName($person->getFirstName, $person->getLastName);

    echo "<div> first and last: " . $person->firstName . " " . $person->lastName . "</div>";
    echo '<pre>';
    print_r($person);
    echo '</pre>';

    /*if (!$user) {
        //insert user
        echo "<div>no match for $person->getFirstName</div>";
    } else {
        echo "<div>HIT! " $person->getFirstName</div>";

    }*/
}

$hashEvent1 = new Event($nummy, "Nummy's hash Run", "Aug 5th, 2016", "it will be great!");

echo '<pre>';
print_r($hashEvent1);
echo '</pre>';

echo '<pre>';
print_r($nummy);
echo '</pre>';
?>