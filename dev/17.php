<?php

for($i = 0; $i < 5000; $i ++)
{
	if(($i % 50) == 0)
		echo "\n\t\t";
	else
		echo ' ';

	echo "\$o=new t17; \$o=null;";
}

