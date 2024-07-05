<?php
    class item{
            private string $name;
            private int $quantity;
            private float $price;
            private float $taxRate;
            public function __construct(string $name, int $quantity, float $price,float $taxRate){
                $this->name = $name;
                $this->quantity = $quantity;
                $this->price = $price;
                $this->taxRate = $taxRate;
            }
            public function getTotalPrice(){
                return $this->quantity * $this->price;
            }

            public function getTaxAmount(){
                return $this->getTotalPrice() * $this->taxRate;
            }
        }      