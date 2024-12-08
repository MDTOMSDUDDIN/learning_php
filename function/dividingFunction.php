<?php

function TaskA(){
    echo "this is a task-1 function";
}
function TaskB(){
    echo "this is a task-b function";
}
function TaskC(){
    echo "this is a task-C function";
}
function TaskD(){
    echo "this is a task-D function ";
}

function TodoTask(){
    TaskA();
    TaskB();
    TaskC();
    TaskD();
}

echo TodoTask();