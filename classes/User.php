<?php

class User 
{
    use Name;
    use Position;
    protected CreditCard $creditCard;   
    protected int $discount = 0;
    protected array $products = [];

    public function __construct($creditCard)
    {
        $this->creditCard = $creditCard;
    }

    public function buy() 
    {
		$total_amount = 0;
		foreach ($this->products as $product) {
			$total_amount += $product->getPrice();
		}

		$total_amount = $total_amount - $total_amount * $this->discount / 100;

		if ($this->creditCard->pay($total_amount)) {
			foreach ($this->products as $product) {
				$total_amount += $product->decrementAvailableQty();
			}
			echo 'Acquisto effettuato';
			return true;
		} else {
			return false;
			echo 'Errore nel pagamento';
		};
	}
}
