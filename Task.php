<?php

class Task{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

}
$task = New Task('Task Description');

var_dump($task->description);

var_dump($task->completed);

$task->complete();
var_dump($task->completed);
