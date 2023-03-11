<?php

class ShoppingCart{

    protected $item;
    protected $price;
    protected $discount;
    protected $tax_rate;
    protected $currency;
    protected $total;
    //protected $updated_at = time();

    // public function __construct($item, $price, $discount, $tax_rate, $currency, $total, $updated_at){
    //     $this->item = $item;
    //     $this->price = $price;
    //     $this->discount = $discount;
    //     $this->tax_rate = $tax_rate;
    //     $this->currency = $currency;
    //     $this->total = $total;
    //     $this->updated_at = $updated_at;
    // }

    public function setItem($item){
        $this->item = $item;
    }

    public function getItem(){
        return $this->item;
    }
    public function setDiscount($discount){
        $this->discount = $discount;
    }
    public function getDiscount(){
        return $this->discount;
    }
    public function setTaxrate($tax_rate){
        $this->tax_rate = $tax_rate;
    }
    public function getTaxrate(){
        return $this->tax_rate;
    }
    public function setCurrency($currency){
        $this->currency = $currency;
    }
    public function getCurrency(){
        return $this->currency;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getTotal(){
        return $this->price + $this->tax_rate - $this->discount;
    }
    // public function getTimeUpdated(){
    //     return $this->updated_at;
    // }
}

$newCart = new ShoppingCart();

$newCart->setItem("Mac Book 2020");
$newCart->setDiscount(1000);
$newCart->setCurrency("$");
$newCart->setPrice(10000);
$newCart->setTaxrate(100);

echo "New Cart1 \n";
echo "Item: ".$newCart->getItem()."\n";
echo "Discount: ".$newCart->getDiscount()."\n";
echo "Cost Price: ".$newCart->getCurrency().$newCart->getPrice()."\n";
echo "Tax Rate: ".$newCart->getTaxrate()."\n";
echo "Total Price: ".$newCart->getCurrency().$newCart->getTotal();

?>
