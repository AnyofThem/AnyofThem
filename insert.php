<?php

$a = -1;
$flag = False;
$arr = array();
$arr_dim = rand(1, 100);

for ($i = 0; $i <= $arr_dim-1; $i++) {
	$arr[$i] = rand();
}

foreach ($arr as &$value) {
	if ($flag == True) {
		$j = $arr_dim - 1;
		while ($j >= $index) {
		$arr[$j+1] = $arr[$j];
		$j--;
		}
		$arr[$index] = $a;
		$arr_dim++;
		$flag = False;
	} else {
	$b = (string) $value;
	$pos = stripos($b, '2');
	if ($pos !== false) {
		$index = key($arr);
		$flag = True;
	}}
}

unset($value);

?>
