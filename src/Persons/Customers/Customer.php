<?php

namespace Persons\Customers;

use Invoices\Invoice;
use Persons\Person;
use Restaurants\Restaurant;

class Customer extends Person {
  private array $interestedCategories;

  public function __construct($name, $age, $address, $interestedCategories)
  {
    parent::__construct($name, $age, $address);
    $this->interestedCategories = $interestedCategories;
  }

  public function printInterstedCategories(): void
  {
    $custerInterestedCategories = 'Tom wanted to eat ';
    foreach(array_keys($this->interestedCategories) as $category) {
      $custerInterestedCategories .= $category . ', ';
    }

    echo substr($custerInterestedCategories, 0, strlen($custerInterestedCategories) - 2) . '.' . PHP_EOL;
  }
  
  /**
   *  @var FoodItem => volume[] $orderMenu
   */
  public function interestedCategories(Restaurant $restaurant): array
  {
    
    $menu = $restaurant->getMenu();
    $order = $this->name . " was looking at the menu, and orderd";
    $orderMenu = array();
    
    foreach($this->interestedCategories as $key => $volume) {
      if(in_array($key, $menu))
      {
        $order .= ' ' . $key . ' x ' . $volume;
        $orderMenu[$key] = $volume;
      }
    }

    echo $order . '.' . PHP_EOL;

    return $orderMenu;
  }


  public function order(Restaurant $restaurant): Invoice
  {
    // お客さんのinterestedCategoriesをコンソールに表示する
    $this->printInterstedCategories(); 
    
    // Restaurantのメニューの中からinterestedCategoriesの中にあるFoodを選択し、コンソールに表示する
    $orderMenu = $this->interestedCategories($restaurant);
    
    return $restaurant->order($orderMenu);
  }
}