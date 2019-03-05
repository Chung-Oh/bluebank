<?php

require_once '../../vendor/autoload.php';

use Src\Dao\AccountDao;
use Src\Dao\TransactionDao;
use Src\Helpers\Calculate;
use Src\Validation\Validate;

try {
	/*
	** Getting the datas of form for validate and effect operation, bellow about Depositer
	*/
	$idDep = $_POST['idDepositor'];
	$value = $_POST['value'];
	$idRec = $_POST['idRecipient'];
	/*
	** Getting instance of client object with data him
	*/
	$accountDep = AccountDao::load($idDep);
	$accountRec = AccountDao::load($idRec);
	/*
	** Validating depositor equals recipient
	*/
	if (Validate::ifEqual($accountDep->getId(), $accountRec->getId())) {
		/*
		** Validating if depositor balance and value move are correct
		*/
		if (Validate::veriryBalance($accountDep->getBalance(), $value)) {
			/*
			** Getting balance update for Calculate class
			*/
			$balanceUpdateDep = Calculate::output($accountDep->getBalance(), $value);
			$balanceUpdateRec = Calculate::entry($accountRec->getBalance(), $value);
			/*
			** Here enter move operation, where balance value will update
			*/
			if (AccountDao::balanceUpdate($idDep, $balanceUpdateDep)
				&& AccountDao::balanceUpdate($idRec ,$balanceUpdateRec)) {
				/*
				** If pass the condition, the Transaction class will be instantiated and will
				** go into next condition to insert movement in the database
				*/
				$transaction = new TransactionDao(
					null,
					null,
					$accountDep->getId(),
					$accountRec->getId(),
					$value
				);

				if ($transaction->transfer()) {
					/*
					** If the method of class Transaction was successful it will
					** redirect to index with a message of success
					*/
					header('Location: ../../index.php');
					$_SESSION['success'] = "Transação efetuada com <span class='font-weight-bold'>sucesso</span>";
				}
			}
		}
	}
} catch (PDOException $e) {
	/*
	** Using pdo class to catch error messages in database
	*/
	echo 'Message: ' . $e->getMessage();
}