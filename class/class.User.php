<?php
class User {
    protected $id; // do not allow user to set this property - only get
    protected $password;
    public $hashName;
    public $firstName;
    public $lastName;
    public $email;

    public function __construct($password, $hashName, $firstName, $lastName, $email) {
        echo '<div>making password: ' . hash('sha512',$password). '</div>';
        $this->password     =  hash('sha512',$password);
        $this->hashName     = $hashName;
        $this->firstName    = $firstName;
        $this->lastName     = $lastName;
        $this->email        = $email;
    }

    public function setPassword($password) {
        echo 'hi';

    }

   /* public function getPassword() {
        return $this->password;
    }*/

    public function getId() {
        return $this->id;
    }
}

?>