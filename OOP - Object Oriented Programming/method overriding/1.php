<?php

class ParentClass {
    public function showMessage() {
        echo "This is the message from Parent Class.\n";
    }
}

class ChildClass extends ParentClass {
    
    public function showMessage() {             //method overriding 
        echo "This is the message from Child Class.\n";
    }
}

// $parent = new ParentClass();
// $parent->showMessage(); 

$child = new ChildClass();          
$child->showMessage(); 

?>
