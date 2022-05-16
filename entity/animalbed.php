<?php

class animalbed{
        public $size;
        public $material;
        public $price;
        public $weight;
        public $color;

        function __construct($_type,$_material, $_price){
            $this->type = $_type;
            $this->material = $_material;
            $this->price = $_price;
            $this->display();
        }
    
        function display(){
            echo('<p>'.$this->type.' '. $this->material.' '. $this->price.'</p>');
        }
    
    }


    echo('<h2>Animal Beds</h2>');

    $dogfood= new animalbed('Bed for dogs', 'iron, tissue', '15.00$');
    $catfood = new animalbed('Bed for cats', 'iron, tissue', '18.00$');
?>