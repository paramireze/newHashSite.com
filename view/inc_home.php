<h1>Hello Everybody. It is good to see you. I want to hear what you do when you're doing the things you do.</h1>
<div>let me know if I can help in anyway</div>
<?php
//buildDB();
//$users = getUsers();

class user {
    protected $id;
    protected $firstName;
    protected $lastName;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }

}

class hash {
    protected $id;
    protected $host;
    protected $name;

    public function __construct($user, $name) {
        $this->name = $name;
        $this->host = $user->getId;
    }
}

$bill = new User('bill');
echo $bill->name();

//dropTable();
?>