<?php

namespace FoodItems;

use FoodItem;

class Fettuccine extends FoodItem {
  static string $category = "Pasta";

  public function __construct()
  {
    parent::__construct(" Fettuccine", "This is  Fettuccine", 12);
  }

  public static function getCategory(): string
  {
    return self::$category;
  }
}