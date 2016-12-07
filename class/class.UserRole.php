<?php
class UserRole {
    protected $id; // do not allow user to set this property - only get
    public $userId;
    public $roleId;
    public $created;

    public function __construct($userId, $roleId) {
        $this->userId     = $userId;
        $this->roleId     = $roleId;
    }
}
