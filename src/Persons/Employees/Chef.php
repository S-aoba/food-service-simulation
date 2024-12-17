<?php

namespace Persons\Employees;

use Persons\Employees\Employee;
// TODO: ADD FoodOrder statement

class Chef extends Employee {
  public function __construct($name, $age, $address, $employeeId, $salary)
  {
    parent::__construct($name, $age, $address, $employeeId, $salary);
  }

  public function prepareFood(FoodOrder $foodOrder): string {
    return "";
  }
}