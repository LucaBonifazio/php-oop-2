<?php

class SubUser extends User {
    private $username;
    private $password;
    private $discount = 20;

    public function __construct($username, $password, $discount)
	{
		$this->username = $username;
		$this->password = $password;
		$this->discount = $discount;
	}

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}

$username = 'The One';
$password = 'password';