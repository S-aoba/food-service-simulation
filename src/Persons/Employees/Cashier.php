<?php

namespace Persons\Employees;

use Persons\Employees\Employee;
// TODO: Add Restaurant statement

class Cashier extends Employee
{
  public function __construct($name, $age, $address, $employeeId, $salary)
  {
    parent::__construct($name, $age, $address, $employeeId, $salary);
  }

  // TODO: Remove null in Return Type
  public function generateOrder(array $categories, Restaurant $restaurant): ?FoodOrder
  {
    return null;
  }
  
  // TODO: Remove null in Return Type
  public function generateInvoice(FoodOrder $order): ?Invoice
  {
    return null;
  }
}