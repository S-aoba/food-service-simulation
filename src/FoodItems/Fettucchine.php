<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Fettucchine extends FoodItem {
  private const CATEGORY = "Pasta";
  private const COOKINGTIME = 7;

  public function __construct()
  {
    parent::__construct(" Fettuccine", "This is  Fettuccine", 10.8);
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