<?php 
    class Food extends Product{
        public $weight;
        public $ingredients;

        function __construct($name, $image, Animal $madeFor, $weight, $ingredients){
            parent::__construct($name, $image, $madeFor);
            $this->weight = $weight;
            $this->ingredients = $ingredients;
        }

        public function showDetailOne(){
            echo $this->weight;
        }
    
        public function showDetailTwo(){
            echo $this->ingredients;
        }
    }

?>