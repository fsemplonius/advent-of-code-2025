<?php

include 'Puzzle_2510.php';
$input = explode("\r\n", $s1);
//
$buttons = array ();
$n = 0;
while ($s1=next($input)) {
  $j = ($en=strpos($s1, ']')) + 3;
  $buttons[++$n][] = 2**($en-1) - 1;
  $buti = 0;
  while ($en > 0) {
    $buti *= 2;
    if ($s1[$en--] == '#') $buti++;
  }
  $buttons[$n][] = 0;
  $buttons[$n][] = $buti;
  $but = 0;
  while (true) {
    if ($s1[$j-1] == '{') {
      $buttons[$n][1] = 2**(count($buttons[$n])-3) - 1;
      break;
    }
    $s2 = $s1[$j++];
    if ($s2 == ')') {
      $buttons[$n][] = $but;
      $but = 0;
      $j += 2;
    }
    else {
      if ($s2 == ',') $s2 = $s1[$j++];
      $but = $but ^ 2**(int)$s2;
    }
  }
}
//
$tot = 0;
$z = 0;
foreach ($buttons as $button) {
  $res = 0;
  $fewest = 99999;
  $clicks = $button[1];
  do {
    $button1 = $button[2];
    $low = 0;
    $i = 3;
    $click = $clicks;
    while ($click != 0) {
      if ($click & 1) {
        $button1 = $button1 ^ $button[$i];
        $low++;
      }
      $click = (int) ($click / 2);
      $i++;
    }
    if ($button1 == 0) {
      $fewest = min($fewest, $low);
    }
  } while (--$clicks > 0);
  $tot += $fewest;
}
//
echo "Result: $tot";

?>
