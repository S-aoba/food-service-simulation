<?php

namespace FoodOrders;

use DateTime;

class FoodOrder {
  /** @var FoodItem[] $items */
  // 注文された料理が入った配列
  private array $items;
  // orderが入った時間
  private DateTime $orderTime;

  public function __construct($items)
  {
    $this->items = $items;
    
    date_default_timezone_set("Asia/Tokyo");
    $this->orderTime = new DateTime();
  }

  public function getItems(): array
  {
    return $this->items;
  }

  public function getOrderTime(): DateTime 
  {
    return $this->orderTime;  
  }
}