<?php

namespace FoodOrders;

use DateTime;

class FoodOrder {
  /** @var FoodItem[] $items */
  private array $items;
  private DateTime $orderTime;

  public function __construct($items, $orderTime)
  {
    $this->items = $items;
    $this->orderTime = $orderTime;
  }
}