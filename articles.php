<?php
    class Articles 
    {
        private $title;
        private $price;
        private $category;

        public function __construct($title, $price, $category) {
            $this->title = $title;
            $this->price = $price;
            $this->category = $category;
        }

        public function getTitle()
        {
                return $this->title;
        }

        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        public function getPrice()
        {
                return $this->price;
        }

        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        public function getCategory()
        {
                return $this->category;
        }
    }