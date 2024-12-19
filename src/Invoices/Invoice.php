<?php

namespace Invoices;

use DateTime;

class InVoice {
  private float $finalPrice;
  // 注文時間
  private DateTime $orderTime;
  // 注文が完成するまでの時間
  private int $estimatedTimeInMinutes;

  public function __construct($finalPrice, $orderTime, $estimatedTimeInMinutes)
  {
    $this->finalPrice = $finalPrice;
    $this->orderTime = $orderTime;
    $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
  }

  public function printInvoice(): void {
    echo "---------------------------------------" . PHP_EOL;

    echo "Date: " . $this->orderTime->format("Y/m/d H:i:s") . PHP_EOL;
    echo "Final Price: " . '$ ' . $this->finalPrice . PHP_EOL;

    echo "---------------------------------------" . PHP_EOL;
  }

  public function getFinalPrice() : int {
    return $this->finalPrice;
  }

  public function getOrderTime() : DateTime {
    return $this->orderTime;
  }

  public function getEstimatedTimeInMinutes() : int {
    return $this->estimatedTimeInMinutes;
  }
}