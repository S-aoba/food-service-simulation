<?php

namespace Persons\Employees;

use Persons\Employees\Employee;
use FoodOrders\FoodOrder;
use Invoices\Invoice;

class Cashier extends Employee
{
  public function __construct($name, $age, $address, $employeeId, $salary)
  {
    parent::__construct($name, $age, $address, $employeeId, $salary);
  }

  public function generateOrder(array $categories): FoodOrder
  {
    // Orderを受け取った旨をコンソールに表示する
    echo $this->name . " received the order." . PHP_EOL;

    return new FoodOrder($categories);
  }
  
  public function generateInvoice(FoodOrder $order): Invoice
  {
    echo $this->name . " made the invoice." . PHP_EOL;

    // 注文時間
    $orderTime = $order->getOrderTime();

    // 最終価格
    $finalPrice = 0;
    foreach($order->getItems() as $foodName => $volume)
    {
      for($i = 0; $i < $volume; $i++) {
        $className = "\FoodItems\\" . $foodName;
        $foodInstance = new $className();
        $finalPrice += $foodInstance->getPrice();
      }
    }

    // 注文が完成するまでの時間
    $prepareOrderTime = 0;
    foreach($order->getItems() as $foodName => $volume)
    {
      for($i = 0; $i < $volume; $i++) {
        $className = "\FoodItems\\" . $foodName;
        $foodInstance = new $className();
        $prepareOrderTime += $foodInstance->getCookingTime();
      }
    }
    return new Invoice(floatval($finalPrice), $orderTime, $prepareOrderTime);
  }
}