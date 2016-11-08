<h1>Hello Everybody. It is good to see you. I want to hear what you do when you're doing the things you do.</h1>
<div>let me know if I can help in anyway</div>
<?php
//buildDB();
//$users = getUsers();




$nummy = new User(1, 'nummy', 'paul', 'ramirez');
$fedora = new User(2, 'fedora', 'trisha', 'casey');
$steamingDogVomit = new User(3, 'steaming dog vomit', 'jack', 'philiac');

$hashEvent1 = new Event($nummy, "Nummy's hash Run", "Aug 5th, 2016", "it will be great!");

echo '<pre>';
print_r($hashEvent1);
echo '</pre>';

echo '<pre>';
print_r($nummy);
echo '</pre>';
?>