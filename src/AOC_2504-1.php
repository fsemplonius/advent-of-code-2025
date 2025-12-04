<?php
//
//
include 'Puzzle_2504.php';
$input = explode("\r\n", $s1);
$map = array ();
$strt = strlen($input[1]);
$eLine = str_repeat('.', $strt);
$map[] = ".$eLine".'.';
while ($s1 = next($input)) {
  $map[] = '.'.$s1.'.';
}
$map[] = $map[0];
$width = strlen($input[1]);
//
//
$tot = 0;
$dirs = array (array(-1,-1), array(0,-1), array(1,-1), array(-1,0), array(1,0), array(-1,1), array(0,1), array(1,1));
//
for ($h=1; $h<=$width; $h++) {
  for ($v=1; $v<=$width; $v++) {
    if ($map[$v][$h] == '@') {
      $occ = 0;
      foreach ($dirs as $dir) {
        list ($v1, $h1) = $dir;
        if ($map[$v+$v1][$h+$h1] == '@') $occ++;
      }
      if ($occ < 4) $tot++;
    }
  }
}
//
echo "Result: $tot";

?>
