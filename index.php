<?php


    class Buyer {
        public $name;
        public $surname;
        public $age;
        public $discount = 0;

        function __construct($_name, $_surname, $_age)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->age = $_age;
        }

        public function setDiscount($_age) {
            if ($_age < 18) {
                $this->discount = 50;
            }
        }

        public function getDiscount() {
            return $this->discount;
        }

        use Country;
    }


    trait Country {
        public $country = 'Italy';
    }


    class Product {
        public $type;
        public $price;

        function __construct($_type, $_price)
        {
            $this->type = $_type;
            $this->price = $_price;
            
        }
    }

    class WhiteShoes extends Product {
        public $color = 'White';
    }


    // PRIMO COMPRATORE
    $buyer1 = new Buyer('Giuseppe','Rossi', 25);
    // sconto primo compratore
    $buyer1->setDiscount(25);


    // SECONDO COMPRATORE
    $buyer2 = new Buyer('Luca','Verdi', 13);
    // sconto primo compratore
    $buyer2->setDiscount(13);

    // SCARPE DI COLORE BIANCO
    $whitenike = new WhiteShoes('Air', 190);
    $whiteconverse = new WhiteShoes('High Top', 110);


    var_dump($buyer1);
    var_dump($buyer2);
    var_dump($whitenike);
    var_dump($whiteconverse);

?>