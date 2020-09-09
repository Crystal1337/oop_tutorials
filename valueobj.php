<?php

class Age
{
  private $age;

  public function __construct($age)
  {

    if($age < 0 || $age > 120)
    {
      throw new InvalidArgumentException('That makes no sense');
    }

    $this->age = $age;
  }
}

function register(string $name, Age $age)
{

}

register('Michał Nowak', new Age(100));


class Coordinate
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
      $this->x = $x;
      $this->y = $y;
    }
}

function pin($x, $y)
{

}

function pin(Coordinate $coordinate)
{
  $coordinate->x;
}

function distance($x1, $y1, $x2, $y2)
{

}

function distance(Coordinate $start, Coordinate $end)
{

}
 ?>
