<?php
    trait Position {
        protected $lat;
        protected $lng;
        protected $address;

        public function getAddress($lat, $lng) 
        {
            $this->lat = $lat;
            $this->lng = $lng;

            $this->address = $lat . ' ' . $lng;

            return $this->address;    
        }
    }