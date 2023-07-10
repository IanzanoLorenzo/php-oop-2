<?php 
    class Product {
        public $name;
        protected $price;
        public $image;
        public $madeFor;
        function __construct($name, $image, $madeFor) {
            $this->name = $name;
            $this->image = $image;
            $this->madeFor = $madeFor;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getPrice(){
            echo $this->price;
        }
    };
?>