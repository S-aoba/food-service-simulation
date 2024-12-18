<?php

namespace FoodItems;

use FoodItem;

class  CheeseBurger extends FoodItem {
  private const CATEGORY = "Burger";
  private const COOKINGTIME = 3;

  public function __construct()
  {
    parent::__construct("CheeseBurger", "This is CheeseBurger", 12);
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