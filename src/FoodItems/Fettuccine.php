<?php

namespace FoodItems;

use FoodItem;

class Fettuccine extends FoodItem {
  private const CATEGORY = "Pasta";

  public function __construct()
  {
    parent::__construct(" Fettuccine", "This is  Fettuccine", 12);
  }

  public static function getCategory(): string
  {
    return self::CATEGORY;
  }
}