<?php

namespace Src\Model;

class Account
{
	private $id;
	private $numberAccount;
	private $cpf;
	private $agency;
	private $balance;

	public function __construct($id, $numberAccount, $cpf, $agency, $balance)
	{
		$this->id = $id;
		$this->numberAccount = $numberAccount;
		$this->cpf = $cpf;
		$this->agency = $agency;
		$this->balance = $balance;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getNumberAccount()
	{
		return $this->numberAccount;
	}

	public function setNumberAccount($numberAccount)
	{
		$this->numberAccount = $numberAccount;
	}

	public function getCpf()
	{
		return $this->cpf;
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

	public function getAgency()
	{
		return $this->agency;
	}

	public function setAgency($agency)
	{
		$this->agency = $agency;
	}

	public function getBalance()
	{
		return $this->balance;
	}

	public function setBalance($balance)
	{
		$this->balance = $balance;
	}
}