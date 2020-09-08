<?php
/*
class Oven
{
  public function cookPizza()
  {
    var_dump('Cooking basic pizza');
  }
}

class SpecialOven extends Oven
{
  public function cookLasagne()
  {
    var_dump('Cooking lasagne');
  }
}

(new SpecialOven ())->cookPizza();
(new SpecialOven ())->cookLasagne();
*/
class Collection
{
  protected $items = [];

  public function __construct($items = [])
  {
    $this->items = $items;
  }

  public function sum($key)
  {
    return array_sum(array_column($this->items, $key));
  }
}

class MovieCollection extends Collection
{
  public function length()
  {
    return $this->sum('length');
  }
}

class Movie
{
  public $title;
  public $lenght;

  public function __construct($title, $length)
  {
    $this->title = $title;
    $this->length = $length;
  }
}

$movies = new MovieCollection([
  new Movie('How to code', 100),
  new Movie('How to code better', 200),
  new Movie('How to code like a pro', 300)
]);

echo $movies->length();
var_dump($movies);
 ?>
