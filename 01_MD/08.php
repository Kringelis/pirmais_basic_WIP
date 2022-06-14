<?php

$employees = [
    createEmployee('Pirmais', 7.50,35),
    createEmployee('Otrias', 8.20,47),
    createEmployee('Tresais', 10.00 ,73),
];

function createEmployee(string $name, float $salary, int $hours):stdClass
{
    $employee = new stdClass();
    $employee->name = $name;
    $employee->salary = $salary;
    $employee->hours = $hours;
    return $employee;
}
    foreach ($employees as $employee) {
        if ($employee->hours > 60) {
            echo 'ERROR - too much worked' . PHP_EOL;
        }
    }
    foreach ($employees as $employee) {
        echo "{$employee->name} ({$employee->hours} / {$employee->salary}$)" . PHP_EOL;
        if ($employee->salary < 8.00 ) {
            echo 'ERROR - too little pay' . PHP_EOL;
        }
}
function calculateSalary(stdClass $employees):int{
  $overtime = 0;
  $hours = $employees->hours;
  if ($employees->hours >40) {
      $overtime = $employees->hours - 40;
      $hours = 40;
  }
    return $employees->salary * $hours + $overtime * 1.5;}


foreach ($employees as $employee) {
    echo "{$employee->name} ({$employee->hours} / {$employee->salary}$)" . PHP_EOL;
    if ($employee->hours > 60) {
        echo 'ERROR - too much worked' . PHP_EOL;
    }
}
    if ($employee->salary < 8.00 ) {
        echo 'ERROR - too little pay' . PHP_EOL;

}


