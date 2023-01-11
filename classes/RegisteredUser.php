<?php

class RegisteredUser extends User 
{
	private int $id;
	private string $username;
	private string $password;
	protected int $discount = 20;

	public function __construct($username, $password)
	{
		// vado nel database a prendere i dati dell'utente
		// setto le variabili di istanza in base ai volori del database
		//
		// $row = $conn->query("SELECT * FROM users WHERE `username` = $username AND `password` = $password;");
        $this->username = $username;
        $this->password = $password;

		$row = ['dati dal database'];
        
		$this->creditCard = new CreditCard(123, 2023, 10);

		//parent::__construct($row['name'], $row['address'], $this->creditCard);

        parent::__construct($this->creditCard, 'name', 'surname', 'address');
	}
}