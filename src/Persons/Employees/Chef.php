<?php

namespace Persons\Employees;

use Persons\Employees\Employee;
use FoodOrders\FoodOrder;

class Chef extends Employee {
  public function __construct($name, $age, $address, $employeeId, $salary)
  {
    parent::__construct($name, $age, $address, $employeeId, $salary);
  }

  public function prepareFood(FoodOrder $order): void {
    $orderTime = 0;
    $order = $order->getItems();
    
    foreach($order as $name => $volume)
    {
      for($i = 0; $i < $volume; $i++) {
        // 調理工程をコンソールに表示する
        echo $this->name . " was cooking " . $name . '.' . PHP_EOL;
  
        $className = "\FoodItems\\" . $name;
        $foodInstance = new $className();
        $orderTime += $foodInstance->getCookingTime();
      }
    }

    echo $this->name . " took " . $orderTime . " minutes to cook." . PHP_EOL;
  }
}