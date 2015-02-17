<?php

/*
	$ [PHPMark2]   /call/phpmark.php , 150216   (C) 2005-2015 MF
*/



final class PHPMark {
	static private	$time	= null;

	static private	$base_begin = null, $base_end = null;
	static private	$test_begin = null, $test_end = null;


	static public function BaseBegin ( )	{	self::$base_begin	= microtime ( );	}
	static public function BaseEnd   ( )	{	self::$base_end		= microtime ( );	}
	static public function TestBegin ( )	{	self::$test_begin	= microtime ( );	}
	static public function TestEnd   ( )	{	self::$test_end		= microtime ( );	}


	static public function Time ( )
	{
		$base_begin	= explode (' ', self::$base_begin);
		$base_end	= explode (' ', self::$base_end);
		$test_begin	= explode (' ', self::$test_begin);
		$test_end	= explode (' ', self::$test_end);

		$base	= (((double) $base_end [0]) + ((double) $base_end [1])) - (((double) $base_begin [0]) + ((double) $base_begin [1]));
		$test	= (((double) $test_end [0]) + ((double) $test_end [1])) - (((double) $test_begin [0]) + ((double) $test_begin [1]));

		if($test > $base)
			self::$time	= $test - $base;
		else
			self::$time	= 0;
	}


	static public function Mark ( )
	{
		if(self::$time === null)
			self::Time ( );

		if(self::$time > 0)
			$mark	= 1000 / self::$time;
		else
			$mark	= 0;

		echo '<script type="text/javascript">window.mark = '.round ($mark, 0).';</script>';
	}

	static public function Data ($times, $size, $unit)
	{
		if(self::$time === null)
			self::Time ( );

		if(self::$time <= 0)
			return;

		$count	= ($times * $size) / self::$time;

		if($count < 1024)
			$data	= sprintf ('%.1f', $count).' '.$unit;
		else if($count < 1048576)
			$data	= sprintf ('%.1f', $count / 1024, 1).' K'.$unit;
		else if($count < 1073741824)
			$data	= sprintf ('%.1f', $count / 1024 / 1024, 1).' M'.$unit;
		else 
			$data	= sprintf ('%.1f', $count / 1024 / 1024 / 1024, 1).' G'.$unit;

		echo '<script type="text/javascript">window.data = \''.$data.'\';</script>';
	}


	static public function ResourceFile ($name)
	{
		return dirname (__FILE__).'/../res/'.$name;
	}

	static public function Resource ($name)
	{
		$file	= self::ResourceFile ($name);

		if($data = @ file_get_contents ($file))
			return $data;

		exit;
	}
}



set_time_limit (0);
ignore_user_abort ( );

