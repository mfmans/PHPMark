<?php

for($i = 0; $i < 1000; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t";
	else
		echo ' ';

	echo "base64_encode(\$d); base64_decode(\$d);";
}

