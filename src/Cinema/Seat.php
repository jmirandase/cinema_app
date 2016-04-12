<?php

namespace Cinema;

class Seat
{
  protected $code;

  protected $available;

  public function __construct($code)
  {
    $this->code      = $code;
    $this->available = true;
  }

  public function getCode()
  {
    return $this->code;
  }

  public function isAvailable()
  {
    return $this->available;
  }

  public function setCode($code)
  {
    $this->code = $code;
    return $this;
  }

  public function occupy()
  {
    $this->available = false;
    return $this;
  }
}
