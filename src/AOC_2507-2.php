<?php

include 'Puzzle_2507.php';
$input = explode("\r\n", $s1);
//
$old = array ();
$old[$pS=strpos($input[0], 'S')] = 1;
for ($row=0; $row<count($input)-2; $row+=2) {
  $current = array ();
  for ($col=0; $col<strlen($input[1]); $col++) {
    if ($input[$row+2][$col] == '^') {
      if ($input[$row+2][$col-1] == '.')
        $current[$col-1] += $old[$col];
      if ($input[$row+2][$col+1] == '.')
        $current[$col+1] += $old[$col];
    }
    elseif ($input[$row+2][$col] == '.')
      $current[$col] += $old[$col];
  }
  $old = $current;
}
$tot = array_sum($current);
//
echo "Result: $tot";

?>
