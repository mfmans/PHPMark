<?php

for($i = 0; $i < 1000; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t\t";
	else
		echo ' ';

	echo "include './t0.php'; require './t0.php';";
}

