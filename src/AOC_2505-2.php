<?php
//
include 'Puzzle_2505.php';
$input = explode("\r\n", $s1);
//
while ($s1=next($input))
  $IDs[] = explode('-', $s1);
sort($IDs);
//
$tot = $n = 0;
$st = $IDs[$n][0];
while ($IDs[$n][0]) {
  $en = $IDs[$n][1];
  if ($en < $st-1) $en = $st - 1;
  $tot += $en - $st + 1;
  $st = max($en+1, $IDs[++$n][0]);
}
//
echo "Result: $tot";

?>
