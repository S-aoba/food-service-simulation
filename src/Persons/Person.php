<?php

abstract class Person {
  protected string $name;
  protected int $age;
  protected string $addres;

  public function __construct($name, $age, $addres)
  {
      $this->name = $name;
      $this->age = $age;
      $this->addres = $addres;
  }
}