<?php

namespace FoodItems;

use FoodItem;

class Spaghetti extends FoodItem{
  private const CATEGORY = "Pasta";

  public function __construct()
  {
    parent::__construct("Spaghetti", "This is Spaghetti", 10);
  }

  public static function getCategory(): string
  {
    return self::CATEGORY;
  }
}