<?php

//
//
include 'Puzzle_2501.php';
$input = explode("\r\n", $s1);

$tot = 0;
$pos = 50;
while ($s1=next($input)) {
  $times = $s1[1];
  if (isset($s1[2]))
    $times = $times*10 + (int)$s1[2];
  if (isset($s1[3]))
    $times = $times*10 + (int)$s1[3];
  $pos = $pos + ($s1[0] == 'L' ? -$times : $times);
  if (($pos % 100) == 0) $tot++;
}

echo "Result: $tot";

?>
