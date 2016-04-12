<?php

namespace Cinema;

use \SplObjectStorage;

use Cinema\Film;

class BoxOffice
{
  protected $showtimes;

  public function __construct(SplObjectStorage $showtimes = null)
  {
    $this->showtimes = $showtimes ? : new SplObjectStorage();
  }

  public function getShowtimes(Film $film = null)
  {
    if ($film) {
     return $this->showtimes->contains($film) ? $this->showtimes[$film] : null;
    }

    return $showtimes;
  }

  public function setShowtimes(SplObjectStorage $showtimes)
  {
    $this->showtimes = $showtimes;
    return $this;
  }
}
