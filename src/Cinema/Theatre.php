<?php

namespace Cinema;

use \SplFixedArray;
use Cinema\SeatGenerator;

class Theatre
{
  protected $number;

  protected $capacity;

  protected $seats;

  public function __construct($capacity = 0)
  {
    $this->number   = 0;
    $this->capacity = $capacity;
    $this->seats    = null;
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function getSeats()
  {
    if ($this->seats) {
      return $this->seats;
    }
    $seats = new SeatGenerator();
    $seats->setFormat('{{alpha}}-{{num}}')
          ->setCapacity($this->capacity);
    $this->seats = new SplFixedArray($this->capacity);
    $index       = 0;
    foreach ($seats() as $seat) {
      $this->seats[$index] = $seat;
      $index++;
    }
    return $this->seats;
  }

  public function getCapacity()
  {
    return $this->capacity;
  }

  public function setNumber($number)
  {
    $this->number = $number;
    return $this;
  }
}
