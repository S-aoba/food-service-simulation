<?php

namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;

class Customer extends Person {
  private array $interestedCategories;

  public function __construct($name, $age, $address, $interestedCategories)
  {
    parent::__construct($name, $age, $address);
    $this->interestedCategories = $interestedCategories;
  }

  
  public function interestedCategories(Restaurant $restautant): array{
    // Restaurant を引数に取り、そのレストランが持っている自分が興味のある食品カテゴリのリストを返します。
    return [];
  }

  // TODO: Remove null in Return Type
  public function order(Restaurant $restaurant, array $categories): ?Invoice {
    return null;
  }
}