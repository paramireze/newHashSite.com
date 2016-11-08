<?php
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

?>