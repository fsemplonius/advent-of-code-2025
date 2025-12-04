<?php
//
include 'Puzzle_2503.php';
$input = explode("\r\n", $s1);
$tot = 0;
//
$len = strlen($input[1]);
while ($s1=next($input)) {
  $tot1 = $ps = 0;
  for ($k=0; $k<12; $k++) {
    $s2 = substr($s1,$ps,$len-$ps+$k-11);
    for ($i=9; $i>=0; $i--) {
      if (($ps1=strpos($s2,strval($i))) !== false) {
        $ps += $ps1 + 1;
        break;
      }
    }
    $tot1 = $tot1*10 + $i;
  }
  $tot += $tot1;
}
//
echo "Result: $tot";

?>
