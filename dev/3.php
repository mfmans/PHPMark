<?php

for($i = 0; $i < 10000; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t\t";
	else
		echo ' ';

	echo "t3();";
}

