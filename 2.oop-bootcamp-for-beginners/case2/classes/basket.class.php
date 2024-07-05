<?php
    class basket{
        private array $items = [];
        public function addItem(item $item){
            $this->items[] = $item;
        }
        public function getTotalPrice(){
            $totalPrice = 0.0;
            foreach($this->items as $item){
                $totalPrice += $item->getTotalPrice();
            }
            return $totalPrice;
        }
        public function getTotalAmount(){
            $totalTax = 0.0;
            foreach($this->items as $item){
                $totalTax += $item->getTaxAmount();
            }
            return $totalTax;
        }

        public function applyDiscountToFuits(float $discount){
            foreach($this->items as $item){
                $item->setDiscount($discount);
            }
        }
    }