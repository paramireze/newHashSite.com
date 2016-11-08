<?php
class Event {
    protected $id;
    protected $hare;
    protected $description;
    protected $startDate;
    protected $created;
    protected $title;
    protected $cancel;

    public function __construct($hare, $title, $startDate, $description = null) {
        $this->hare = $hare;
        $this->title = $title;
        $this->startDate = $startDate;
        $this->description = $description;
        $this->created = date("Y-m-d H:i:s");

    }

    public function getHare () {
        return $this->hare;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getDescription() {
        return $this->description;
    }
}

?>