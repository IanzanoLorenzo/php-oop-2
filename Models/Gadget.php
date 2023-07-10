<?php 
    class Gadget extends Product{
        public $caracteristics;
        public $dimensions;
        function __construct($name, $image, $madeFor,Array $caracteristics, $dimensions){
            parent::__construct($name, $image, $madeFor);
            $this->caracteristics = $caracteristics;
            $this->dimensions = $dimensions;
        }
    }
?>