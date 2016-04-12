<?php

namespace Cinema;

use \DateTime;

use Cinema\Film;
use Cinema\Theatre;
use Cinema\Seat;

class Ticket
{
  protected $code;

  protected $film;

  protected $theatre;

  protected $seat;

  protected $createdAt;

  protected $customer;

  public function __construct()
  {
    $this->code      = '';
    $this->film      = null;
    $this->theatre   = null;
    $this->seat      = null;
    $this->createdAt = null;
    $this->customer  = null;
  }

  public function getCode()
  {
    return $this->code;
  }

  public function getFilm()
  {
    return $this->film;
  }

  public function getTheatre()
  {
    return $this->theatre;
  }

  public function getSeat()
  {
    return $this->seat;
  }

  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  public function getCustomer()
  {
    return $this->customer;
  }

  public function setCode($code)
  {
    $this->code = $code;
    return $this;
  }

  public function setFilm(Film $film)
  {
    $this->film = $film;
    return $this;
  }

  public function setTheatre(Theatre $theatre)
  {
    $this->theatre = $theatre;
    return $this;
  }

  public function setSeat(Seat $seat)
  {
    $this->seat = $seat;
    return $this;
  }

  public function setCreatedAt(Datetime $createdAt)
  {
    $this->createdAt = $createdAt;
    return $this;
  }

  public function setCustomer($customer)
  {
    $this->customer = $customer;
    return $this;
  }
}
