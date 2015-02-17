<?php

for($i = 0; $i < 1000; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t";
	else
		echo ' ';

	echo "foreach(\$d as \$k=>\$v);";
}

