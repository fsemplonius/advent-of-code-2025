<?php
//
//
include 'Puzzle_2505.php';
$input = explode("\r\n", $s1);
$ingrents = array ();
while ($s1=next($input)) {
  $s2 = explode('-', $s1);
  $ingrets[] = array($s2[0], $s2[1]);
}
$tot = 0;
$avail = array ();
while ($s1=next($input)) {
  foreach ($ingrets as $ingret) {
    if ($ingret[0] <= $s1 and $ingret[1] >= $s1) {
      $tot++;
      break;
    }
  }
}
//
echo "Result: $tot";

?>
