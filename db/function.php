<?php
/*
 CREATE TABLE `test_madisonh3_com`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first` VARCHAR(45) NULL,
  `last` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `hashName` VARCHAR(45) NULL
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC));

 client ID: 127178184606-vbfpqj3hh6lu44o7dgcu62cdecgve36t.apps.googleusercontent.com
 client secret: gHgPYixQYZcqv5s3ao26z0EV
 */


function dbConnection() {
    $hostname = dbHostName;
    $username = dbUserName;
    $password = dbPassword;
    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=test_madisonh3_com",$username,$password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    }
    catch(PDOException $e)
    {
        $dbh = null;
        echo $e->getMessage();
    }
    return $dbh;

} ?>


