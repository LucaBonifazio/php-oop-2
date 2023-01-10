<?php
class CreditCard
{
	private $number;
	private $cvc;
	private $expiry;

	public function __construct($number, $cvc, $expiry)
	{
		$this->number = $number;
		$this->cvc = $cvc;
		$this->expiry = $expiry;
	}

	public function checkValidity()
	{
        if ($this->expiry == date("m.d.y")){
            return false;
        } else {
            return true;
        }
	}
}