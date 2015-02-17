<?php

for($i = 0; $i < 2500; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t\t";
	else
		echo ' ';

	echo "pack('VVVVVVVV',0,0,0,0,0,0,0,0);";
}

