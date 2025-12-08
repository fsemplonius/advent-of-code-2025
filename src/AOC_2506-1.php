<?php
//
include 'Puzzle_2506.php';
$input = explode("\r\n", $s1);
//
$sheet = array();
$row = 0;
while ($s1=next($input)) {
  $i = $n = 0;
  $s1 = "$s1 ";
  while ($s1[$i] == ' ') $i++;
  $col = 0;
  while ($s2=$s1[$i++]) {
    if ($s2 == '+' or $s2 == '*') break 2;
    if ($s2 == ' ') {
      $sheet[$col++][$row] = $n;
      $n = 0;
      while ($s1[$i] == ' ') $i++;
    }
    else {
      $n = $n*10 + (int)$s2;
    }
  }
  $row++;
}
//
$tot = 0;
$i = 0;
foreach ($sheet as $col) {
  while (($s2=$s1[$i]) == ' ') $i++;
  $tot1 = $s2=='+' ? 0 : 1;
  foreach ($col as $row) {
    if ($s2 == '+')
      $tot1 += $row;
    else
      $tot1 *= $row;
  }
  $tot += $tot1;
  $i++;
}
//
echo "Result: $tot";

?>
