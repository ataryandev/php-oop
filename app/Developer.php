<?php

namespace App;

class Developer extends Worker
{
    protected string $role;

    public function work(){
        echo "Developer Working!";
    }


}
