<?php

namespace App;

class Developer extends Worker
{
    protected string $salary;

    public function work(){
        echo "Developer Working!";
    }

    /**
     * @return string
     */
    public function getSalary(): string
    {
        return $this->salary;
    }

    /**
     * @param string $salary
     */
    public function setSalary(string $salary): void
    {
        $this->salary = $salary;
    }


}
