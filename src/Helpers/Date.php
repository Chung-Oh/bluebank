<?php

namespace Src\Helpers;

class Date
{
	/*
	** Responsible for to DATE handler
	*/
	public static function manipulateDate($arg)
	{
		$year = substr($arg, 0, 4);
		$month = substr($arg, 5, 2);
		$day = substr($arg, 8, 2);
		$char = '/';
		$date = $day . $char . $month . $char . $year;
		return $date;
	}
	/*
	** Responsible for to TIME handler
	*/
	public static function manipulateTime($arg)
	{
		$time = substr($arg, 11, 8) . " hrs";
		return $time;
	}
	/*
	** Responsible for manipulate DATE with TIME
	*/
	public static function dateFull($arg)
	{
		$time = Date::manipulateTime($arg);
		$date = Date::manipulateDate($arg);
		$full = $date . " - " . $time;
		return $full;
	}
}