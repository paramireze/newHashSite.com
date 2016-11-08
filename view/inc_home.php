<h1>Hello Everybody. It is good to see you. I want to hear what you do when you're doing the things you do.</h1>
<div>let me know if I can help in anyway</div>
<?php
//buildDB();
//$users = getUsers();

class User {
    protected $id;
    protected $hashName;
    protected $firstName;
    protected $lastName;

    public function __construct($id, $hashName, $firstName, $lastName) {
        $this->id = null;
        $this->hashName = $hashName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;

    }

    public function getHashName() {
        return $this->hashName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->hashName;
    }


    public function getId() {
        return $this->id;
    }

    public function setHashName($hashName) {
        $this->name = $hashName;
    }

}

class EventType {
    protected $id;
    protected $name;
    protected $created;
    protected $lastUpdated;

    public function __construct($name) {
        $this->name = $name;
        $this->created = date("Y-m-d H:i:s");
        $this->lastUpdated = date("Y-m-d H:i:s");
    }
}

class Event {
    protected $id;
    protected $hare;
    protected $description;
    protected $startDate;
    protected $created;
    protected $title;
    protected $cancel;

    public function __construct($hare, $title, $startDate, $description = null) {
        $this->hare = $hare;
        $this->title = $title;
        $this->startDate = $startDate;
        $this->description = $description;
        $this->created = date("Y-m-d H:i:s");

    }

    public function getHare () {
        return $this->hare;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getDescription() {
        return $this->description;
    }
}

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