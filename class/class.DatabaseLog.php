<?php

class Log {
    public      $id;
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
}

class DatabaseLog extends Log {
    public $note;
    public $sql;
    public $params;
    public $rowsAffected;
    public $status;
    public function __construct($note, $sql, $params) {
        parent::__construct();
        $this->note         = !empty($note) ? $note : null;
        $this->sql          = $sql;
        $this->params       = $params;
        $this->rowsAffected = 0;
        $this->status       = "Fail";
    }
}

?>