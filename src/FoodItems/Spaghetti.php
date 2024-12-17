<?php

namespace FoodItems;

use FoodItem;

class Spaghetti extends FoodItem{
  static string $category = "Pasta";

  public function __construct()
  {
    parent::__construct("Spaghetti", "This is Spaghetti", 10);
  }

  static function getCategory(): string
  {
    return self::$category;
  }
}