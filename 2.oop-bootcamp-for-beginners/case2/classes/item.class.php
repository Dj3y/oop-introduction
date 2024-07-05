<?php
    class item{
        private string $name;
        private int $quantity;
        private float $price;
        private float $taxRate;
        private bool $isFruit;
        private float $discount = 0.0;
        public function __construct(string $name, int $quantity, float $price,float $taxRate, bool $isFruit = false){
            $this->name = $name;
            $this->quantity = $quantity;
            $this->price = $price;
            $this->taxRate = $taxRate;
            $this->isFruit = $isFruit;
        }
        public function getTotalPrice(){
            return $this->quantity * $this->price;
        }

        public function getTaxAmount(){
            return $this->getTotalPrice() * $this->taxRate;
        }

        public function setDiscount(float $discount){
            if($this->isFruit){
                $this->discount = $discount;
            }
        }
    }
