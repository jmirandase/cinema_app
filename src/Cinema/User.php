<?php

namespace Cinema;

use \DateTime;

class User
{
  protected $username;

  protected $password;

  protected $firstName;

  protected $surname;

  protected $email;

  protected $birthdate;

  public function __construct()
  {
    $this->username  = null;
    $this->password  = null;
    $this->firstName = '';
    $this->surname   = '';
    $this->email     = null;
    $this->birthdate = null;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function getSurname()
  {
    return $this->surname;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getBirthdate()
  {
    return $this->birthdate;
  }

  public function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }

  public function setPassword($password)
  {
    $this->password = $password;
    return $this;
  }

  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
    return $this;
  }

  public function setSurname($surname)
  {
    $this->surname = $surname;
    return $this;
  }

  public function setEmail($email)
  {
    $this->email = $email;
    return $this;
  }

  public function setBirthdate(DateTime $birthdate)
  {
    $this->birthdate = $birthdate;
    return $this;
  }
}
