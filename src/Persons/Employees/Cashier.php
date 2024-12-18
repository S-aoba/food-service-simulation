<?php

namespace Persons\Employees;

use Persons\Employees\Employee;
use FoodOrders\FoodOrder;
use Restaurants\Restaurant;

class Cashier extends Employee
{
  public function __construct($name, $age, $address, $employeeId, $salary)
  {
    parent::__construct($name, $age, $address, $employeeId, $salary);
  }

  public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder
  {
    //
  }
  
  public function generateInvoice(FoodOrder $order): Invoice
  {
    //
  }
}