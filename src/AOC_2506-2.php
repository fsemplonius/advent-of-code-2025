<?php
//
include 'Puzzle_2506.php';
$input = explode("\r\n", $s1);
$sheet = array ();
while ($s1=next($input))
  $sheet[] = "$s1 ";
$ncol = strlen($sheet[0]);	// all rows have same length

$tot = 0;
for ($col=0; $col<$ncol; $col++) {
  $n = 0;
  for ($row=0; $row<count($sheet); $row++) {
    if (($s1=$sheet[$row][$col]) == ' ') continue;
    if ($s1 == '+' or $s1 == '*')
      $tot1 = ($plmu=$s1)=='+' ? 0 : 1;
    else
      $n = $n*10 + (int)$s1;
  }
  if ($n == 0)
    $tot += $tot1;
  elseif ($plmu == '+')
    $tot1 += $n;
  else
    $tot1 *= $n;
}
//
echo "Result: $tot";

?>
