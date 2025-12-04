<?php
//
//
include 'Puzzle_2503.php';
$input = explode("\r\n", $s1);
$tot = 0;
//
$len = strlen($input[1]);
while ($s1=next($input)) {
  for ($i=9; $i>0; $i--) {
    if (($ps1=strpos(substr($s1,0,$len-1),strval($i))) !== false) {
      for ($j=9; $j>0; $j--) {
        if (strpos(substr($s1,$ps1+1),strval($j)) !== false) {
          break 2;
        }
      }
    }
  }
  $tot += $i*10 + $j;
}
//
echo "Result: $tot";

?>
