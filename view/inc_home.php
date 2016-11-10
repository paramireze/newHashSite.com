<h1>Pauls Awesome Page</h1>
<div>Suck it!</div>
<?php


$result = createUserTable();
echo '<pre>';
print_r($result);
echo '</pre>';
$people = populatePeople();

addPeopleToDB($people);

$hashEvent1 = new Event($nummy, "Nummy's hash Run", "Aug 5th, 2016", "it will be great!");

echo '<pre>';
print_r($hashEvent1);
echo '</pre>';

echo '<pre>';
print_r($nummy);
echo '</pre>';
?>