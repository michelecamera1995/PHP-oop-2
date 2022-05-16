<?php

class animaltoys{
        public $type;
        public $price;
        public $materials;
        public $weight;
        public $color;


        function __construct($_type, $_price){
            $this->type = $_type;
            $this->price = $_price;
            $this->display();
        }

        function display(){
            echo('<p>'.$this->type.' '. $this->price.'</p>');
        }


    }

    echo('<h2>Animal Toys</h2>');

    $bonedog = new animaltoys('Rubber Bone', '6.00$');
    $mouse = new animaltoys('Mouse', '3.00$');
?>