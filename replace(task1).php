<?php

const n = 99;
$a = -1;
$flag = False;
$arr = array();

for ($i = 0; $i <= n; $i++) {
	$arr[$i] = rand();
}

foreach ($arr as &$value) {
	if ($flag == True) {
		$value = $a;
		$flag = False;
	} else {
	$b = (string) $value;
	$pos = stripos($b, '2');
	if ($pos !== false) {
		$flag = True;
	}}
}

unset($value);

?>
