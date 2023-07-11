<?php 
    class Item extends Product{
        public $madeOf;
        public $dimensions;

        function __construct($name, $image,Animal $madeFor, $madeOf, $dimensions){
            parent::__construct($name, $image, $madeFor);
            $this->madeOf = $madeOf;
            $this->dimensions = $dimensions;
            if($this->dimensions === null){
                $this->dimensions = 'N/D';
            }
        }

        public function showDetailOne(){
            echo $this->madeOf;
        }

        public function showDetailTwo(){
            echo $this->dimensions;
        }
    }
?>