<?php

function sum($x, $y)
{
  if(!is_float($x) || !is_float($y))
  {
    throw new InvalidArgumentException('Please provide a float');
  }

  return $x + $y;
}


try{
  echo sum(2, []);
} catch (InvalidArgumentException $e){
  echo 'Damn';
}


 ?>
