<?php

namespace App;
require_once 'Traits/NotificationTrait.php';

class Developer extends Worker
{
    use \Notification;
    protected string $salary;

    public function work(){
        echo "Developer Working! <br />" ;
        $this->send();
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
