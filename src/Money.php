<?php namespace LasseRafn\Money;

class Money
{
	protected $request;

	private $amount;

	public function __construct($amount = 1)
	{
		$this->amount = $amount;
	}

	public function toCents()
	{
		return $this->amount * 100;
	}

	public function fromCents()
	{
		return $this->amount / 100;
	}
}