<?php
function random($min, $max){
      $numbers = range($min, $max);
      shuffle($numbers);
      return $numbers;
}