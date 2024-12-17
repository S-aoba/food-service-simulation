<?php

namespace FoodItems;

use FoodItem;

class  CheeseBurger extends FoodItem {
  static string $category = "Burger";

  public function __construct()
  {
    parent::__construct("CheeseBurger", "This is CheeseBurger", 12);
  }

  public static function getCategory(): string
  {
    return self::$category;
  }
}