<?php

class DatabaseLog extends Log {
    public $note;
    public $sql;
    public $params;
    public $status;
    public function __construct($note, $sql, $params) {
        parent::__construct();
        $this->note         = !empty($note) ? $note : null;
        $this->sql          = $sql;
        $this->params       = $params;
        $this->status       = "Fail";
    }
}

?>