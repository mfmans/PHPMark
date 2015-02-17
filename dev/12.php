<?php

for($i = 0; $i < 1000; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t\t";
	else
		echo ' ';

	echo "file_get_contents(\$f);";
}

