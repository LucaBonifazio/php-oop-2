<?php
    class User 
    {
        private $name;
        private $surname;
        private $username;
        private $password;
        private $creditCard;   
        private $discount = 0;
        private $isRegistered = false;
        private $expiry;

        public function __construct($name, $surname, $creditCard)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->creditCard = $creditCard;
        }

        public function getDiscount()
        {
            return $this->discount;
        }

        public function registerUser($username, $password) 
        {
            $this->username = $username;
            $this->password = $password;
            $this->isRegistered = true;
            $this->discount = 20;
        }

        public function pay() 
        {
            if($this->checkValidity() == true) {
                return 'Pagamento effettuato';
            } else {
                return 'Pagamento non effettuato';
            }
        }

        public function checkValidity()
        {
            if ($this->expiry == date("m.d.y")){
                return false;
            } else {
                return true;
            }
        }

        public function getCreditCard()
        {
            return $this->creditCard;
        }
    }