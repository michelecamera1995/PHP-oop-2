
<?php

class animalfood{
        public $type;
        public $price;
        public $ingrediants;
        public $weight;

        function __construct($_type, $_price){
            $this->type = $_type;
            $this->price = $_price;
            $this->display();
        }

        function display(){
            echo('<p>'.$this->type.' '. $this->price.'</p>');
        }

    }

    echo('<h2>Animal Food</h2>');

    $dogfood= new animalfood('kibble for dogs', '10.00$');
    $catfood = new animalfood('Kibble for cats', '8.00$');
?>