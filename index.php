<?php 
$a = array (1, 2, 3, 4);
$c = array ();
$c = array_map (function ($x) {
  return $x + 5;
}, $a);

var_dump ($c);
exit ();

