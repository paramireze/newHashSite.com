<?php

class ActivityLog {
    protected   $id;
    public      $activity;
    public      $created;
    public      $createdBy;
    public      $url;

    public function __construct($activity, $created, $createdBy, $url) {
        $this->activity     = $activity;
        $this->created      = $created;
        $this->createdBy    = $createdBy;
        $this->url          = $url;
    }

    public function getId() {
        return $this->id;
    }
}
?>