<?php

namespace Src\Helpers;

class Handler
{
	/*
	** This method manipulate account data for to on View
	*/
	public static function account($account)
	{
		$first = substr($account, 0, 2);
		$second = substr($account, 2, 6);
		$third = substr($account, 8);
		$result = $first . '.' . $second . '.' . $third;

		return $result;
	}
	/*
	** This method is similar to above, treating cpf
	*/
	public static function cpf($cpf)
	{
		$first = substr($cpf, 0, 3);
		$second = substr($cpf, 3, 3);
		$third = substr($cpf, 6, 3);
		$fourth = substr($cpf, 9);
		$result = $first . '.' . $second . '.' . $third . '-' . $fourth;

		return $result;
	}
	/*
	** Get the value passed and change the point by comma
	*/
	public static function value($value)
	{
		$result = str_replace('.', ',', $value);

		return $result;
	}
}