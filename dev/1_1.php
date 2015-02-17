<?php


$tokens = '';

for($i = 0; $i < 4096; $i ++) {
	switch($i % 34) {
		case 0:		$token = '$variab ';		break;
		case 1:		$token = 'identif ';		break;
		case 2:		$token = '"a{$v}" ';		break;
		case 3:		$token = "'strin' ";		break;
		case 4:		$token = "0       ";		break;
		case 5:		$token = "1234567 ";		break;
		case 6:		$token = "-123456 ";		break;
		case 7:		$token = "0777777 ";		break;
		case 8:		$token = "0xFFFFF ";		break;
		case 9:		$token = "3.14159 ";		break;
		case 10:	$token = "0.314E1 ";		break;
		case 11:	$token = "31.4E-1 ";		break;
		case 12:	$token = '+       ';		break;
		case 13:	$token = '-       ';		break;
		case 14:	$token = '*       ';		break;
		case 15:	$token = '/       ';		break;
		case 16:	$token = '.       ';		break;
		case 17:	$token = '&       ';		break;
		case 18:	$token = '|       ';		break;
		case 19:	$token = '^       ';		break;
		case 20:	$token = '%       ';		break;
		case 21:	$token = '=       ';		break;
		case 22:	$token = '+=      ';		break;
		case 23:	$token = '-=      ';		break;
		case 24:	$token = '*=      ';		break;
		case 25:	$token = '/=      ';		break;
		case 26:	$token = '==      ';		break;
		case 27:	$token = '===     ';		break;
		case 28:	$token = '>       ';		break;
		case 29:	$token = '>=      ';		break;
		case 30:	$token = '<       ';		break;
		case 31:	$token = '<=      ';		break;
		case 32:	$token = ';       ';		break;
		case 33:	$token = ',       ';		break;
	}

	$tokens .= $token;
}

$fp = fopen ('../res/32k', 'w');

fwrite ($fp, $tokens);
fclose ($fp);
