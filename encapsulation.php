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

  private function hasWinner()
  {
    //only used in this class
  }

  protected function hasAdvantage()
  {
    //used in this class and children of this class
  }

  protected function inDeuce()
  {

  }
}

 ?>
