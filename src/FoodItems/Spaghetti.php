<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Spaghetti extends FoodItem{
  private const CATEGORY = "Pasta";
  private const COOKINGTIME = 5;

  public function __construct()
  {
    parent::__construct("Spaghetti", "This is Spaghetti", 10.5);
  }

  public static function getCategory(): string
  {
    return self::CATEGORY;
  }

  public static function getCookingTime(): int
  {
    return self::COOKINGTIME;
  }
}