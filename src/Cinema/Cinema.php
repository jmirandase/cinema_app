<?php

namespace Cinema;

use \SplObjectStorage;
use \DateTime;
use Cinema\BoxOffice;
use Cinema\Schedule;

class Cinema
{
  protected $theatres;

  protected $boxOffice;

  public function __construct()
  {
    $this->theatres  = [
      '100' => new Theatre(30),
      '102' => new Theatre(35),
      '104' => new Theatre(40),
      '201' => new Theatre(30),
      '203' => new Theatre(35),
      '300' => new Theatre(40)
    ];
    $showtimes       = new SplObjectStorage();
    $bvs = new Film();
    $bvs->setTitle('Batman v Superman: Dawn of Justice')
        ->setStoryline("Fearing that the actions of Superman are left unchecked, Batman takes on the Man of Steel, while the world wrestles with what kind of a hero it really needs.")
        ->setGenres(['Action', 'Adventure', 'Fantasy'])
        ->setRuntime(151)
        ->setReleaseDate(new DateTime('2016-03-25'))
        ->setLanguage('English')
        ->setStars(['Ben Affleck', 'Henry Cavill', 'Amy Adams', 'Gal Gadot'])
        ->setDirectors(['Zack Snyder'])
        ->setWriters(['Chris Terrio', 'David S. Goyer']);
    $sch1 = new Schedule(new DateTime('2016-04-11 21:00:00'));
    $sch1->setFilm($bvs)
         ->setTheatre($this->theatres['100']);
    $sch2 = new Schedule(new DateTime('2016-04-11 20:00:00'));
    $sch2->setFilm($bvs)
         ->setTheatre($this->theatres['102']);
    $showtimes[$bvs] = [$sch1, $sch2];
    $cw = new Film();
    $cw->setTitle('Captain America: Civil War')
      ->setStoryline("Political interference in the Avengers' activities causes a rift between former allies Captain America and Iron Man.")
      ->setGenres(['Action', 'Adventure', 'Sci-Fi'])
      ->setRuntime(146)
      ->setReleaseDate(new DateTime('2016-04-29'))
      ->setLanguage('English')
      ->setStars(['Chris Evans', 'Robert Downey Jr.', 'Scarlett Johansson'])
      ->setDirectors(['Anthony Russo', 'Joe Russo'])
      ->setWriters(['Christopher Markus', 'Stephen McFeely']);
    $sch3 = new Schedule(new DateTime('2016-04-29 00:00:00'));
    $sch3->setFilm($cw)
         ->setTheatre($this->theatres['105']);
    $sch4 = new Schedule(new DateTime('2016-04-29 20:00:00'));
    $sch4->setFilm($cw)
         ->setTheatre($this->theatres['201']);
    $sch5 = new Schedule(new DateTime('2016-04-29 21:00:00'));
    $sch5->setFilm($cw)
         ->setTheatre($this->theatres['203']);
    $showtimes[$cw] = [$sch3, $sch4, $sch5];
    $h8 = new Film();
    $h8->setTitle('The Hateful Eight')
      ->setStoryline("In the dead of a Wyoming winter, a bounty hunter and his prisoner find shelter in a cabin currently inhabited by a collection of nefarious characters.")
      ->setGenres(['Crime', 'Drama', 'Mistery'])
      ->setRuntime(167)
      ->setReleaseDate(new DateTime('2016-01-21'))
      ->setLanguage('English')
      ->setStars(['Samuel L. Jackson', 'Kurt Russell', 'Jennifer Jason Leigh'])
      ->setDirectors(['Quentin Tarantino'])
      ->setWriters(['Quentin Tarantino']);
    $sch6 = new Schedule(new DateTime('2016-04-12 14:00:00'));
    $sch6->setFilm($h8)
         ->setTheatre($this->theatres['300']);
    $sch7 = new Schedule(new DateTime('2016-04-13 16:00:00'));
    $sch7->setFilm($h8)
         ->setTheatre($this->theatres['201']);
    $sch8 = new Schedule(new DateTime('2016-04-13 18:00:00'));
    $sch8->setFilm($h8)
         ->setTheatre($this->theatres['203']);
    $showtimes[$h8] = [$sch6, $sch7, $sch8];
    $tr = new Film();
    $tr->setTitle('The Revenant')
      ->setStoryline("A frontiersman on a fur trading expedition in the 1820s fights for survival after being mauled by a bear and left for dead by members of his own hunting team.")
      ->setGenres(['Adventure', 'Drama', 'Thriller'])
      ->setRuntime(156)
      ->setReleaseDate(new DateTime('2016-02-04'))
      ->setLanguage('English')
      ->setStars(['Leornadro DiCaprio', 'Tom Hardy', 'Will Poulter'])
      ->setDirectors(['Alejandro G. Iñárritu'])
      ->setWriters(['Mark L. Smith', 'Alejandro G. Iñárritu']);
    $sch9 = new Schedule(new DateTime('2016-04-13 14:00:00'));
    $sch9->setFilm($tr)
         ->setTheatre($this->theatres['100']);
    $sch10 = new Schedule(new DateTime('2016-04-13 16:00:00'));
    $sch10->setFilm($tr)
         ->setTheatre($this->theatres['102']);
    $showtimes[$tr] = [$sch9, $sch10];
    $js = new Film();
    $js->setTitle('Jason Bourne')
      ->setStoryline("The plot is unknown.")
      ->setGenres(['Action', 'Thriller'])
      ->setRuntime(null)
      ->setReleaseDate(new DateTime('2016-07-28'))
      ->setLanguage('English')
      ->setStars(['Alicia Vikander', 'Julia Stiles', 'Matt Damon'])
      ->setDirectors(['Paul Greengrass'])
      ->setWriters(['Matt Damon', 'Paul Greengrass']);
    $sch11 = new Schedule(new DateTime('2016-07-28 00:00:00'));
    $sch11->setFilm($js)
         ->setTheatre($this->theatres['300']);
    $showtimes[$js] = [$sch11];
    $this->boxOffice = new BoxOffice($showtimes);
  }

  public function getTheatres()
  {
    return $this->theatres;
  }

  public function getBoxOffice()
  {
    return $this->boxOffice;
  }

  public function setTheatres(array $theatres)
  {
    $this->theatres = $theatres;
    return $this;
  }

  public function setBoxOffice(BoxOffice $boxOffice)
  {
    $this->boxOffice = $boxOffice;
    return $this;
  }
}
