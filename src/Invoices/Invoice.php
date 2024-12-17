<?php

namespace Invoices;

use DateTime;

class InVoice {
  private float $finalPrice;
  private DateTime $orderTime;
  private int $estimatedTimeInMinutes;

  public function __construct($finalPrice, $orderTime, $estimatedTimeInMinutes)
  {
    $this->finalPrice = $finalPrice;
    $this->orderTime = $orderTime;
    $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
  }
}