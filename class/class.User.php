<?php
class User {
    protected $id; // do not allow user to set this property - only get
    protected $password;
    public $userName;
    public $firstName;
    public $lastName;
    public $email;
    public $created;
    public $enabled;

    public function __construct($password, $userName, $firstName, $lastName, $email) {
        $this->password     = $password;
        $this->userName     = $userName;
        $this->firstName    = $firstName;
        $this->lastName     = $lastName;
        $this->email        = $email;
    }

    function getDisplayName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
}

?>