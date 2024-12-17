<?php

namespace FoodItems;

class HawaiianPizza extends FoodItem {
  static string $category = "Pizza";

  public function __construct()
  {
    parent::__construct("HawaiianPizza", "This is HawaiianPizza", 9);
  }

  static function getCategory(): string
  {
    return self::$category;
  }
}