<?php
/*
 *
 CREATE TABLE `test_madisonh3_com`.`user` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `firstName` VARCHAR(45) NULL,
          `lastName` VARCHAR(45) NULL,
          `hashName` VARCHAR(45) NULL,
          `email` VARCHAR(45) NULL,
          PRIMARY KEY (`id`),
          UNIQUE INDEX `email_UNIQUE` (`email` ASC));
 */
class User {
    protected $id; // do not allow user to set this property - only get
    public $hashName;
    public $firstName;
    public $lastName;
    public $email;

    public function __construct($hashName, $firstName, $lastName, $email) {
        $this->hashName = $hashName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;

    }

    public function getId() {
        return $this->id;
    }
}

?>