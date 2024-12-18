<?php

namespace FoodItems;

use FoodItem;

class HawaiianPizza extends FoodItem {
  private const CATEGORY = "Pizza";
  private const COOKINGTIME = 5;

  public function __construct()
  {
    parent::__construct("HawaiianPizza", "This is HawaiianPizza", 9);
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