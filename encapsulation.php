<?php

class Person
{

  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function job()
  {
    return 'Junior developer';
  }

  public function favoriteTeam()
  {

  }

  protected function earnings()
  {
    return '122$';
  }
}

$michal = new Person('Michał');

class TennisMatch
{

  public function score()
  {

  }

  protected function hasWinner()
  {

  }

  protected function hasAdvantage()
  {

  }

  protected function inDeuce()
  {

  }
}

 ?>
