<?php
class Calculator {
    // Handling dynamic method calls
    public function __call($name, $arguments) {
        if ($name == 'add') {
            if (count($arguments) == 2) {
                return $arguments[0] + $arguments[1]; // Two parameters
            } elseif (count($arguments) == 3) {
                return $arguments[0] + $arguments[1] + $arguments[2]; // Three parameters
            }
        }
        return "Method not defined for these arguments.";
    }
}

$calc = new Calculator();

// Overloading in action
echo $calc->add(10, 20) . "\n";       
echo $calc->add(5, 10, 15) . "\n";     
echo $calc->add(1);                    

?>
