<?php

namespace Src\Validation;

class Validate
{
	/*
	** Responsible for observe if depositor is diferent of recipient
	*/
	public static function ifEqual($idDep, $idRec)
	{
		if ($idDep != $idRec) {
			return true;
		} else {
			header('Location: ../../index.php');
			$_SESSION['danger'] =
				"Beneficiário <span class='font-weight-bold'>não pode ser o</span> depositante";
		}
	}
	/*
	** Responsible for observe balance value
	*/
	public static function veriryBalance($balance, $value)
	{
		if ($balance >= $value) {
			return true;
		} else {
			header('Location: ../../index.php');
			$_SESSION['danger'] =
				"Depositante <span class='font-weight-bold'>sem saldo</span> para essa operação. Saldo R$ {$balance}";
			die();
		}
	}
}