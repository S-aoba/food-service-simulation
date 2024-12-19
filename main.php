<?php

spl_autoload_extensions(".php");
spl_autoload_register(function ($class) {
  $base_dir = __DIR__ . '/src/';
  $file = $base_dir . str_replace('\\', '/', $class) . '.php';
  if(file_exists($file)) {
    require $file;
  }
});

// 食べ物のインスタンスを作成
$cheeseBurger = new \FoodItems\CheeseBurger();
$fettuccine = new \FoodItems\Fettucchine();
$hawaiianPizza = new \FoodItems\HawaiianPizza();
$spaghetti = new \FoodItems\Spaghetti();

// 従業員のインスタンスの作成
$Inavah =  new \Persons\Employees\Chef("Inavah Lozano", 40, "Osaka", 1, 30);
$Nadia =  new \Persons\Employees\Cashier("Nadia Valentine", 21, "Tokyo", 1, 20);

$saizeriya = new \Restaurants\Restaurant(
  [
    $cheeseBurger,
    $fettuccine,
    $hawaiianPizza,
    $spaghetti
  ],
  [
    $Inavah,
    $Nadia
  ]
);

$interestedMap = [
  "Margerita" => 1,
  "CheeseBurger" => 2,
  "Spaghetti" => 1
]; 

$Tom = new \Persons\Customers\Customer("Tom", 20, "Saitama", $interestedMap);

$invoice = $Tom->order($saizeriya);
$invoice->printInVoice();