<?php 
    class Items extends Product{
        public $madeOf;
        public $dimensions;
        function __construct($name, $image, $madeFor, $madeOf, $dimensions){
            parent::__construct($name, $image, $madeFor);
            $this->madeOf = $madeOf;
            $this->dimensions = $dimensions;
            if($this->dimensions === null){
                $this->dimensions = 'N/D';
            }
        }
    }
?>