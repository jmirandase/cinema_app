<?php

namespace Cinema;

use Cinema\Seat;

class SeatGenerator
{
  protected $prefix;

  protected $capacity;

  public function __construct()
  {
    $this->format   = "{{num}}";
    $this->capacity = 0;
  }

  public function setFormat($format)
  {
    $matches = [];
    preg_match("/^(?P<prefix>{{alpha}}.?)?(?P<number>{{num}})$/",
               $format,
               $matches);
    if (isset($matches['prefix'])) {
      $codes        = range('A', 'Z');
      $prefix       = $codes[array_rand($codes)];
      $this->format = str_replace('{{alpha}}', $prefix, $format);
    }
    return $this;
  }

  public function setCapacity($capacity)
  {
    $this->capacity = $capacity;
    return $this;
  }

  public function __invoke()
  {
    if (!$this->capacity) {
      return;
    }
    $number = 1;
    while ($number <= $this->capacity) {
      $seatCode = str_replace('{{num}}',
                              str_pad($number, 2, '0', \STR_PAD_LEFT),
                              $this->format);
      $number++;
      yield new Seat($seatCode);
    }
  }
}
