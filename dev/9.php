<?php

$w = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$m = strlen($w);

for($i = 0; $i < 256; $i ++) {
	echo $w [$i % $m];
}

