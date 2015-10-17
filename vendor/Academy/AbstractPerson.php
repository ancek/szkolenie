<?php
namespace Academy;

abstract class AbstractPerson
{
    const GENDER_MALE = "M";
    const GENDER_FEMALE = "F";
    
    private $name;
    private $surname;
    private $age;
    private $gender;
    
    public function __construct ($name, $surname, $age, $gender = self::GENDER_MALE)
    {
        $this->setName($name);
        $this->setsurname($surname);
        $this->setAge($age);
        $this->setGender($gender);
    }
    
    public function setName ($name)
    {
        $this->name = ucfirst($name);
        return $this;
    }
    public function getName ()
    {
        return $this->name;
    }
    
    public function setSurname ($surname)
    {
        $this->surname = ucfirst($surname);
        return $this;
    }
    public function getSurname ()
    {
        return $this->surname;
    }
    
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }
    public function getAge ()
    {
        return $this->age;
    }
    
    public function setGender ($gender)
    {
        $this->gender = $gender;
        return $this;
    }
    public function getGender ()
    {
        return $this->gender;
    }
    
    public function hello() 
    {
//        return $this->name . " " . $this->surname;
        return sprintf("Hello %s %s", $this->name, $this->surname);
    }
    
    abstract public function getSalaryYear();
    
}

?>