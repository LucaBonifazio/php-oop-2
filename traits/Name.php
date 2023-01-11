<?php
    trait Name {
        protected $name;
        protected $surname;
        protected $completeName;

        public function getCompleteName($name, $surname) 
        {
            $this->name = $name;
            $this->surname = $surname;

            $this->completeName = $name . ' ' . $surname;

            return $this->completeName;    
        }
    }