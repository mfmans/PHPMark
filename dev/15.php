<?php

for($i = 0; $i < 1000; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t\t";
	else
		echo ' ';

	echo "unpack('v/v/v/v/v/v/v/v',\"\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\\0\");";
}
