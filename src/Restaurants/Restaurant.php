<?php

namespace Restaurants;

use FoodItems\FoodItem;
use Persons\Employees\Employee;
use Invoices\InVoice;

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

  /** @param string[] $categories */
  public function order(array $categories): Invoice
  {
    //
  }
}