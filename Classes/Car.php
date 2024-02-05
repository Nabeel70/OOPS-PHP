<?php

//Visibility and modifiers in classes 

class cloth{
    //Properties / Fields
   private $brand;
    private $product;
    private $price;

    //Constructor(A constructor allows you to initialize an object's properties upon creation of the object.)
    public function __construct($brand, $product, $price)
    {
         $this->Gucci = $brand;
         $this->Jacket = $product;
         $this->Price = $price;
    }
}