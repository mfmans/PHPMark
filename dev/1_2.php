<?php

for($i = 0; $i < 2000; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t";
	else
		echo ' ';

	echo "token_get_all (\$d);";
}

