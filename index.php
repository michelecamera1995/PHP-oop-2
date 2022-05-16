<?php

 include __DIR__ . '/entity/animalbed.php';
 include __DIR__ . '/entity/animalfood.php';
 include __DIR__ . '/entity/animaltoys.php';
 include __DIR__ . '/entity/animalcure.php';

 echo('<h2>Dati utente:</h2>');
 class User {
    public $name;
    public $email;
    private $card = false;
    private  $cardexpirated = false; 
    protected $discount = 0;

    public function payCheck($card ,  $cardexpirated) {
        if($card === true && $cardexpirated === true){
            echo('<p>Metodo di pagamento  valido!</p>');
        }else{
            echo('<p>Metodo di pagamento non valido!</p>');
        }
    }

    public function getSconto() {
        return $this->discount;
    }

};

class SubscribedUser extends User {

   public $subscribed = false;

    public function setDiscount($subscribed) {
        if($subscribed == true) {
            $this->discount  = 20;
        }
    }

}


// Utente 

$SubscribedUser = new SubscribedUser();
$SubscribedUser->name = "Giovanni";
$SubscribedUser->email= "Giovanni@gmaill.com";
$SubscribedUser->setDiscount(true);
$SubscribedUser->payCheck(true , true);


echo('<p>Name: '. $SubscribedUser->name . '</p>');
echo('<p>Email: '. $SubscribedUser->email . '</p>');
echo('<p>Discount: '. $SubscribedUser->getSconto() . '</p>');




?>