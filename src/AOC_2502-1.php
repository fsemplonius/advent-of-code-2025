<?php

//
include 'Puzzle_2502.php';
$input = explode(",", $s1);
array_unshift($input, 0);
$tot = 0;
//
while ($s1=next($input)) {
  list ($st, $en) = explode('-', $s1);
  if (($lst=strlen($st)) != strlen($en) or $lst%2 == 0)
    for ($i=$st; $i<=$en; $i++)
      if (($lst=strlen($i)) % 2 == 0 and
          substr($s2=strval($i),0,$lst/2) == substr($s2,$lst/2,$lst/2))
        $tot += $i;
}
//
echo "Result: $tot";

?>
