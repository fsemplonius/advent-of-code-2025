<?php

include 'Puzzle_2507.php';
$input = explode("\r\n", $s1);
//
$tot = 0;
$input[1][strpos($input[0], 'S')] = '|';
reset($input);
for ($row=1; $row<count($input); $row++) {
  for ($col=0; $col<strlen($input[1]); $col++) {
    if ($input[$row][$col] == '|') {
      if ($input[$row+1][$col] == '^') {
        if ($input[$row+1][$col-1] == '.')
          $input[$row+1][$col-1] = '|';
        if ($input[$row+1][$col+1] == '.')
          $input[$row+1][$col+1] = '|';
        $tot++;
      }
      elseif ($input[$row+1][$col] == '.')
        $input[$row+1][$col] = '|';
    }
  }
}
//
echo "Result: $tot";

?>
