<?php

/*
	$ [PHPMark2]   /call/t9.php , 150216   (C) 2005-2015 MF
*/


require_once './phpmark.php';



// ===== 0 ===================================================================

	$k	= PHPMark::Resource ('256');
	$d	= PHPMark::Resource ('32768');

	$d	= $d.$d.$d.$d.$d.$d.$d.$d.
		  $d.$d.$d.$d.$d.$d.$d.$d.
		  $d.$d.$d.$d.$d.$d.$d.$d.
		  $d.$d.$d.$d.$d.$d.$d.$d;


	function t9 ($data, $password)
	{

		$cipher		= '';
		$key [ ]	= '';
		$box [ ]	= '';

		$pwd_length		= strlen ($password);
		$data_length	= strlen ($data);

		for($i = 0; $i < 2048; $i++)
		{
			$key [$i]	= ord ($password [$i % $pwd_length]);
			$box [$i]	= $i;
		}

		for($j = $i = 0; $i < 2048; $i++)
		{
			$j		= ($j + $box [$i] + $key [$i]) % 256;
			$tmp	= $box [$i];
			$box [$i]	= $box [$j];
			$box [$j]	= $tmp;
		}

		for($a = $j = $i = 0; $i < $data_length; $i++)
		{
			$a		= ($a + 1) % 256;
			$j		= ($j + $box [$a]) % 256;
			$tmp	= $box [$a];
			$box [$a]	= $box [$j];
			$box [$j]	= $tmp;
			$k	= $box [(($box [$a] + $box [$j]) % 256)];
			$cipher	.= chr (ord ($data [$i]) ^ $k);
		}

		return $cipher;
	}

// ===== 0 ===================================================================



PHPMark::BaseBegin ( );

// ===== 1 ===================================================================

// ===== 1 ===================================================================

PHPMark::BaseEnd ( );



PHPMark::TestBegin ( );

// ===== 2 ===================================================================

	t9 ($d, $k);
	t9 ($d, $k);
	t9 ($d, $k);
	t9 ($d, $k);
	t9 ($d, $k);

// ===== 2 ===================================================================

PHPMark::TestEnd ( );



PHPMark::Mark ( );
PHPMark::Data (5, 1048576, 'B/s');

exit;

