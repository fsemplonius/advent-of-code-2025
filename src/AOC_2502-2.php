<?php

//
include 'Puzzle_2502.php';
$input = explode(",", $s1);
array_unshift($input, 0);
$tot = 0;
//
while ($s1=next($input)) {
  list ($st, $en) = explode('-', $s1);
  for ($i=$st; $i<=$en; $i++) {
    $lst = strlen($val=strval($i));
    for ($j=1; $j<=$lst/2; $j++) {
      if ($lst % $j == 0) {
        $chk = substr($val, 0, $j);
        $fnd = true;
        for ($k=$j; $k<$lst; $k+=$j) {
          if ($chk != substr($val,$k,$j)) {
            $fnd = false;
            break;
          }
        }
        if ($fnd) {
          $tot += $i;
          break;
        }
      }
    }
  }
}
//
echo "Result: $tot";

?>
