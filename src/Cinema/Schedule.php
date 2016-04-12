<?php

namespace Cinema;

use \DateTime;
use Cinema\Film;
use Cinema\Theatre;

class Schedule
{
  protected $film;

  protected $theatre;

  protected $datetime;

  public function __construct(DateTime $datetime = null)
  {
    $this->film     = new Film();
    $this->theatre  = new Theatre(10);
    $this->datetime = $datetime;
  }

  public function getFilm()
  {
    return $this->film;
  }

  public function getTheatre()
  {
    return $this->theatre;
  }

  public function getDatetime()
  {
    return $this->datetime;
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

  public function setDatetime(DateTime $datetime)
  {
    $this->datetime = $datetime;
    return $this;
  }
}
