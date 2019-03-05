<?php

namespace Src\Dao;

use Src\Config\Connection;
use Src\Model\Transaction;

class TransactionDao
{
	public $transaction;

	public function __construct($id = null, $date = null, $depositor, $recipient, $value)
	{
		$this->transaction = new Transaction($id, $date, $depositor, $recipient, $value);
	}

	public static function list()
	{
		$query = "SELECT t.id, t.date, a1.number_account AS depositor, a2.number_account AS recipient, t.value FROM transaction AS t LEFT JOIN account AS a1 ON a1.id = t.depositor LEFT JOIN account AS a2 ON a2.id = t.recipient ORDER BY date DESC";
		$conn = Connection::getConn();
		$result = $conn->query($query);
		$list = array();

		foreach ($result->fetchAll() as $row) {
			$transfer = new Transaction(
				$row['id'],
				$row['date'],
				$row['depositor'],
				$row['recipient'],
				$row['value']
			);
			array_push($list, $transfer);
		}

		return $list;
	}

	public function transfer()
	{
		$query = "INSERT INTO transaction (depositor, recipient, value) VALUES (:depositor, :recipient, :value)";
		$conn = Connection::getConn();
		$stmt = $conn->prepare($query);
		$stmt->bindValue(':depositor', $this->transaction->getDepositor());
		$stmt->bindValue(':recipient', $this->transaction->getRecipient());
		$stmt->bindValue(':value', $this->transaction->getValue());
		$stmt->execute();

		return true;
	}
}