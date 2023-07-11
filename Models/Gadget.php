<?php 
    class Gadget extends Product{
        public $caracteristics;
        public $dimensions;

        function __construct($name, $image, Animal $madeFor, $caracteristics, $dimensions){
            parent::__construct($name, $image, $madeFor);
            $this->caracteristics = $caracteristics;
            $this->dimensions = $dimensions;
        }

        public function showDetailOne(){
            echo $this->caracteristics;
        }

        public function showDetailTwo(){
            echo $this->dimensions;
        }
    }
?>