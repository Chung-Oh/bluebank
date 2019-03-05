<?php

namespace Src\Model;

class Transaction
{
	private $id;
	private $date;
	private $depositor;
	private $recipient;
	private $value;

	public function __construct($id = null, $date = null, $depositor, $recipient, $value)
	{
		$this->id = $id;
		$this->date = $date;
		$this->depositor = $depositor;
		$this->recipient = $recipient;
		$this->value = $value;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function getDepositor()
	{
		return $this->depositor;
	}

	public function setDepositor($depositor)
	{
		$this->depositor = $depositor;
	}

	public function getRecipient()
	{
		return $this->recipient;
	}

	public function setRecipient($recipient)
	{
		$this->recipient = $recipient;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function setValue($value)
	{
		$this->value = $value;
	}
}