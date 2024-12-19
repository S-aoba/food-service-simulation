<?php

namespace FoodItems;

abstract class FoodItem {
  protected string $name;
  protected string $description;
  protected float $price;

  public function __construct($name, $description, $price)
  {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
  }

  abstract public static function getCategory(): string;

  public function getName(): string
  {
    return $this->name;
  }

  public function getPrice(): float
  {
    return $this->price;
  }
}