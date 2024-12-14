<?php

trait Logger {
    public function log($message) {
        echo "Log: $message\n";
    }
}

trait FileManager {
    public function saveFile($filename) {
        echo "File '$filename' saved successfully.\n";
    }
}

class User {
    use Logger, FileManager; // Multiple inheritance using traits

    public function createUser($name) {
        echo "User '$name' created.\n";
        $this->log("User creation completed.");
    }
}

$user = new User("tomas");
$user->createUser("John");
$user->saveFile("user_data.txt");
