<?php

class Log {
    protected   $id;
    public      $created;
    public      $createdBy;
    public      $url;
    public      $server;

    public function __construct() {
        $this->created      = getTimeStamp();
        $this->createdBy    = !empty($_SESSION['name']) ? $_SESSION['name'] : 'not logged in';
        $this->url          = $_SERVER['REQUEST_URI'];
        $this->server       = $_SERVER['SERVER_ADDR'];
    }

    public function getId() {
        return $this->id;
    }
}

/*
           `id` INT NOT NULL AUTO_INCREMENT,
          `created` TIMESTAMP,
          `createdBy` VARCHAR(50),
          `note` VARCHAR(500) NULL,
          `url` VARCHAR(100),
          `sql` VARCHAR(300),
          `server` VARCHAR(300) NULL,
          `params` VARCHAR(500) NULL,
          `rowsAffected` VARCHAR(10) NULL,
 */
class DatabaseLog   extends Log {
    public $note;
    public $sql;
    public $params;
    public $rowsAffected;
    public function __construct($note, $sql, $params, $rowsAffected) {
        parent::__construct();
        $this->note         = !empty($note) ? $note : null;
        $this->sql          = $sql;
        $this->params       = $params;
        $this->rowsAffected = $rowsAffected;
    }
}

?>