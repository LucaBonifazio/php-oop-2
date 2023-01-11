<?php

class CreditCard {
	private string $id;
	private int $number;
	private int $expiryYear;
	private int $expiryMonth;

	public function __construct(int $number, int $expiryYear, int $expiryMonth)
	{
		// fare anche i controlli dei valori
		$this->number = $number;
		$this->expiryYear = $expiryYear;
		$this->expiryMonth = $expiryMonth;
	}

	public function isExpired(): bool {
		if ((int) date('y') < $this->expiryYear) {
			return false;
		} else if ((int) date('y') == $this->expiryYear && (int) date('n') < $this->expiryMonth) {
			return false;
		}
		return true;
	}

	public function save() {
		// salva la carta nel database
		$this->id = 'id from database';
		return $this;
	}

	public static function get(int $id) {
		// prende la carta dal database usando l'id
		// i dati presi usali per instanziare un oggetto carta di credito
		// SELECT * FROM creditcards WHERE `id` = $id

		// return new self($number, $expiryYear, $expiryMonth)
	}

	public function pay(float $amount): bool {
		if ($this->isExpired()) {
			// ritorna errore
			return false;
		} else {
			// fai il pagament
			return true;
		}
	}
}