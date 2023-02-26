<?php

namespace  App;

class Worker
{
    public string $name;
    public int $age;
    public array $hours;

    protected string $role;

    public function __construct($name, $age, $hours){
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    public function work(){
        echo "Working!";
    }

}
