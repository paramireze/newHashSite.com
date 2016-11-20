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

?>