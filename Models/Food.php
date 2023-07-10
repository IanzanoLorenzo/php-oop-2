<?php 
    class Food extends Product{
        public $weight;
        public $ingredients;
        function __construct($name, $image, $madeFor,$weight, Array $ingredients){
            parent::__construct($name, $image, $madeFor);
            $this->weight = $weight;
            $this->ingredients = $ingredients;
        }
    }
?>