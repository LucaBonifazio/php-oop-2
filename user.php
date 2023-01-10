<?php

include_once __DIR__ . '/subUser.php';

class User {
    private $name;
    private $surname;
    private $creditCard;

    public function __construct($name, $surname, $creditCard)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->creditCard = $creditCard;
	}
}