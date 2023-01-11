<?php

class Product 
{
	private string $id;
	private string $name;
	private string $category;
	private string $description;
	private int $availableStartMonth;
	private int $availableEndMonth;
	private int $availableQty;
	private int $price;

	public function __construct($id)
	{
		// va nel database e si prende i dati del prodotto
	}

	public function isAvailable ()
	{
		if ($this->availableQty == 0) {
			return false;
		}
		$currentMonth = (int) date('m');
		if ($this->availableStartMonth <= $currentMonth && $currentMonth <= $this->availableEndMonth) {
			return true;
		} else {
			return false;
		}
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function decrementAvailableQty()
	{
		$this->availableQty--;
		return $this;
	}

	public static function getAll() 
        {
		// restituisce un array di oggetti tipo Product (tutti i prodotti) oppure l'array degli id
		// SELECT `id` FROM `products`
		// per ciascuna riga di risultato creo un nuovo oggetto new Product($id)
	}
}