<?php
spl_autoload_register('AutoLoader');

function AutoLoader ($className)
{
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once 'vendor/' . $class . '.php';
}

echo "<h1>Szkolenie PHP - 17.10.2015</h1>";

//require_once 'vendor/Employee.php';

use Academy\Employee;

//Informujemy że Datetime pochodzi z głównej przestrzeni nazw
$datetime = new \DateTime();

$kuba = new Employee("Jakub","Anckiewicz","32","5000");
$monika = new Employee("Monika","Anckiewicz","30","4000", Employee::GENDER_FEMALE);

echo $kuba->hello();

$kuba
    ->setSurname("Ancek")
    ->setSalary(6000);

echo "<br />";
echo "Pensja roczna: " . $kuba->getSalaryYear();
echo "<br />";
echo $kuba->hello();



