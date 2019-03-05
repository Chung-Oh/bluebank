<?php

namespace Src\Helpers;

class Calculate
{
	/*
	** Simple class math operation of entry and output
	*/
	public static function entry($balanceRec, $value)
	{
		return $balanceRec + $value;
	}

	public static function output($balanceDep, $value)
	{
		return $balanceDep - $value;
	}
}