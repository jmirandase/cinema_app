<?php

namespace Cinema;

use \DateTime;

class Film
{
  protected $title;

  protected $storyline;

  protected $genres;

  protected $runtime;

  protected $releaseDate;

  protected $language;

  protected $stars;

  protected $directors;

  protected $writers;

  public function __construct()
  {
    $this->title       = '';
    $this->storyline   = '';
    $this->genres      = [];
    $this->runtime     = '';
    $this->releaseDate = null;
    $this->language    = null;
    $this->stars       = [];
    $this->directors   = [];
    $this->writers     = [];
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getStoryline()
  {
    return $this->storyline;
  }

  public function getGenres()
  {
    return $this->genres;
  }

  public function getRuntime()
  {
    return $this->runtime;
  }

  public function getReleaseDate()
  {
    return $this->releaseDate;
  }

  public function getLanguage()
  {
    return $this->language;
  }

  public function getStars()
  {
    return $this->stars;
  }

  public function getDirectors()
  {
    return $this->directors;
  }

  public function getWriters()
  {
    return $this->writers;
  }

  public function setTitle($title)
  {
    $this->title = $title;
    return $this;
  }

  public function setStoryline($storyline)
  {
    $this->storyline = $storyline;
    return $this;
  }

  public function setGenres(array $genres)
  {
    $this->genres = $genres;
    return $this;
  }

  public function setRuntime($runtime)
  {
    $this->runtime = $runtime;
    return $this;
  }

  public function setReleaseDate(DateTime $releaseDate)
  {
    $this->releaseDate = $releaseDate;
    return $this;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
    return $this;
  }

  public function setStars(array $stars)
  {
    $this->stars = $stars;
    return $this;
  }

  public function setDirectors(array $directors)
  {
    $this->directors = $directors;
    return $this;
  }

  public function setWriters(array $writers)
  {
    $this->writers = $writers;
    return $this;
  }
}
