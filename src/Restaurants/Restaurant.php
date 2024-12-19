<?php

namespace Restaurants;

use FoodItems\FoodItem;
use Persons\Employees\Employee;
use Invoices\InVoice;
use Persons\Employees\Cashier;
use Persons\Employees\Chef;

class Restaurant {
  /** @var FoodItem[] $menu */
  private array $menu;

  /** @var Employee[] $employees */
  private array $employees;

  public function __construct($menu, $employees)
  {
    $this->menu = $menu;
    $this->employees = $employees;
  }

  public function getMenu(): array
  {
    $menuNameList = [];

    foreach($this->menu as $menu) {
      array_push($menuNameList, $menu->getName());
    }
    return $menuNameList;
  }

  /** @param string[] $categories */
  public function order(array $categories): Invoice
  {
    // $employeesの中からCashierを選択する
    $cashier = $this->getCashier();
    // Cashierに$categoriesを渡す
    $order = $cashier->generateOrder($categories);
    
    // $employeesの中からChefを選択する
    $chef = $this->getChef();
    // OrderをChefに渡して、調理させる
    $chef->prepareFood($order);

    // 領収書を準備をする
    $invoice = $cashier->generateInvoice($order);

    return $invoice;
  }

  private function getChef(): Chef
  {
    $chefList = [];
    foreach($this->employees as $employee)
    {
      if($employee instanceof Chef)
      {
        array_push($chefList, $employee);
      }
    }
    // TODO: Select ramdom chef
    return $chefList[0];
  }

  private function getCashier(): Cashier
  {
    $chashierList = [];
    foreach($this->employees as $employee)
    {
      if($employee instanceof Cashier)
      {
        array_push($chashierList, $employee);
      }
    }

    // TODO: Select ramdom chashier
    return $chashierList[0];
  }

}