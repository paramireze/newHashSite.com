<?php
class Role {
    protected $id; // do not allow user to set this property - only get
    public $authority;
    public $created;
    public $enabled;

    public function __construct($authority) {
        $this->authority     = $authority;
    }

    public function getId() {
        return $this->id;
    }
}
