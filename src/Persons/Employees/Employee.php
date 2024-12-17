<?php

namespace Persons\Employees;

use Persons\Person;

class Employee extends Person {
  private int $employeeId;
  private float $salary;

  public function __construct($employeeId, $salary)
  {
    $this->employeeId = $employeeId;
    $this->salary = $salary;
  }
}