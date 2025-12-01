<?php

//
//
include 'Puzzle_2501.php';
$input = explode("\r\n", $s1);

$tot = 0;
$pos = 50;
while ($s1=next($input)) {
  $s2 = $s1[0];
  $times = $s1[1];
  if (isset($s1[2]))
    $times = $times*10 + (int)$s1[2];
  if (isset($s1[3]))
    $times = $times*10 + (int)$s1[3];
  if ($pos == 0 and $s2 == 'L') $tot--;
  $pos += ($s2 == 'L' ? -$times : $times);
  while ($pos < 0) {
    $pos += 100;
    $tot++;
  }
  while ($pos >= 100) {
    $pos -= 100;
    $tot++;
  }
  if ($pos == 0 and $s2 == 'L') $tot++;
}

echo "Result: $tot";

?>
