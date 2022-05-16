<?php

class animalcure{
        public $type;
        public $price;
        public $quantity;



        function __construct($_type, $_price, $_quantity){
            $this->type = $_type;
            $this->price = $_price;
            $this->quantity = $_quantity;
            $this->display();
        }

        function display(){
            echo('<p>'.$this->type.' '. $this->price.' '.$ $this->quantity.'</p>');
        }


    }

    echo('<h2>Animal Cure</h2>');

    $fleas= new animaltoys('fleas', '15.00$');
    $antiparasitic = new animaltoys('antiparasitic', '13.00$');
?>