<?php

class User {
    public $name;
    public $role;

    public function __construct($name, $role = "User") {
        $this->name = $name;
        $this->role = $role;
    }

    public function getInfo() {
        return "{$this->name} is a {$this->role}.";
    }
}

$user1 = new User("Rahim");

echo $user1->getInfo();
