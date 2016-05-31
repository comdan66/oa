<?php 

$a = array (
    array ('01.jpg', 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
    array ('02.png', 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
    array ('03.jpg', 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
    array ('04.png', 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
    array ('05.jpg', 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
  );

// $f = array (
//   1 => 1,
//   2 => 2,
//   3 => 3,
//   );
function oasort ($n, $b = true) {
  if ($n == 1) return array (1);
  if ($n == 2) return array (2);
  if ($n == 3) return array (3);
  if (!($n % 3) && ($n / 3) < 4) return array_merge (array (3), oasort ($n - 3));
  $s = $b ? 2 : 3;
  $v = $n - $s;
  return array_merge (array ($s), oasort ($v, !$b));
}

$oasort = oasort (count ($a));
$b = array ();
foreach ($oasort as $c) {
  $d = array ();
  for ($i = 0; $i < $c; $i++)
    array_push ($d, $a[$i]);
  array_push ($b, $d);
}

echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><pre>';
var_dump ($b);
exit ();