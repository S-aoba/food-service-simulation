<?php

namespace FoodItems;

use FoodItem;

class HawaiianPizza extends FoodItem {
  private const CATEGORY = "Pizza";

  public function __construct()
  {
    parent::__construct("HawaiianPizza", "This is HawaiianPizza", 9);
  }

  public static function getCategory(): string
  {
    return self::CATEGORY;
  }
}