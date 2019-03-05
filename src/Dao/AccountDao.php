<?php

namespace Src\Dao;

use Src\Config\Connection;
use Src\Model\Account;

class AccountDao
{
	public static function list()
	{
		$query = "SELECT ac.id, ac.number_account AS number_account, ci.cpf, ag.number_agency AS agency, ac.balance FROM account AS ac JOIN client AS ci ON ci.id = ac.client JOIN agency AS ag ON ag.id = ac.agency ORDER BY id";
		$conn = Connection::getConn();
		$result = $conn->query($query);
		$list = array();

		foreach ($result->fetchAll() as $row) {
			$account = new Account($row['id'],
				$row['number_account'],
				$row['cpf'],
				$row['agency'],
				$row['balance']
			);
			array_push($list, $account);
		}

		return $list;
	}

	public static function load($id)
	{
		$query = "SELECT id, number_account, client, agency, balance FROM account WHERE id = :id";
		$conn = Connection::getConn();
		$stmt = $conn->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		$result = $stmt->fetch();

		$account = new Account(
			$result['id'],
			$result['number_account'],
			$result['client'],
			$result['agency'],
			$result['balance']
		);

		return $account;
	}

	public static function balanceUpdate($id, $balanceUpdate)
	{
		$query = "UPDATE account SET balance = :balanceUpdate WHERE id = :id";
		$conn = Connection::getConn();
		$stmt = $conn->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->bindValue(':balanceUpdate', $balanceUpdate);
		$stmt->execute();

		return true;
	}
}