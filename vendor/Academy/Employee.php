<?php
namespace Academy;
//require_once 'AbstractPerson.php';

class Employee Extends AbstractPerson 
{
    private $salary;
    private $commision;
    
    public function __construct($name, $surname, $age, $salary, $gender = self::GENDER_MALE) {
        parent::__construct($name, $surname, $age, $gender);
        $this->salary = $salary;
    }
    
    public function setSalary ($salary)
    {
        $this->salary = $salary;
        return $this;
    }
    
    public function getSalaryYear()
    {
        return 12 * $this->salary;
    }
    
    public function display()
    {
        $res = array
        (
            'name' => $this->name,
            'surname' => $this->surname,
            'salary' => $this->salary,
            'commision' => $this->commision
        );
        
        return $res;
    }
}
