<?php

class Team
{

  protected $name;
  protected $members = [];

  public function __construct($name, $members = [])
  {
    $this->name = $name;
    $this->members = $members;
  }

  public static function start(...$params)
  {
    return new static(...$params);
  }

  public function name()
  {
    return $this->name;
  }

  public function members()
  {
    return $this->members;
  }

  public function add($name)
  {
    $this->members[] = $name;
  }

  public function cancel()
  {

  }

  public function manager()
  {

  }
}

class Member
{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function lastViewed()
  {

  }
}

/*$devops = new Team('DevOps',[
  'Michał Nowak',
  'Edyta Nowak'
]);

var_dump($devops->members());

$devops->add('Paweł Nowak');
$devops->add('Anna Nowak');

var_dump($devops->members());*/

$devops = Team::start('DevOps',[
  new Member('Michał Kowalski'),
  new Member('Edyta Kowalska')
]);

var_dump($devops->members());

 ?>
