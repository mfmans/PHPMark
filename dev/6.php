<?php

for($i = 0; $i < 2000; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t";
	else
		echo ' ';

	echo "sha1(\$d);";
}

