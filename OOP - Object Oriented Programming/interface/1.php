<?php

interface InterfaceName {
    public function method1();
    public function method2($param);
    public function method3(): string;
}

class ClassName implements InterfaceName {
    public function method1() {
        echo "Method1 implemented.\n";
    }

    public function method2($param) {
        echo "Method2 implemented with param: $param\n";
    }

    public function method3(): string {
        return "Method3 implemented.";
    }
}

$obj = new ClassName();
$obj->method1();
$obj->method2("Test");
echo $obj->method3();


