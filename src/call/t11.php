<?php

/*
	$ [PHPMark2]   /call/t11.php , 150216   (C) 2005-2015 MF
*/


require_once './phpmark.php';



// ===== 0 ===================================================================

	$i	= 0;

	$d	= PHPMark::Resource ('32768');
	$f	= dirname (__FILE__).'/../tmp/t11.php';

	if(@ file_put_contents($f, $d) == 0)
		exit;

// ===== 0 ===================================================================



PHPMark::BaseBegin ( );

// ===== 1 ===================================================================

	for($i = 0; $i < 3; $i ++)
		;

// ===== 1 ===================================================================

PHPMark::BaseEnd ( );



PHPMark::TestBegin ( );

// ===== 2 ===================================================================

	for($i = 0; $i < 3; $i ++)
	{
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
		file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d); file_put_contents($f,$d);
	}

// ===== 2 ===================================================================

PHPMark::TestEnd ( );


PHPMark::Mark ( );
PHPMark::Data (3000, 32768, 'B/s');



@unlink ($f);

exit;
