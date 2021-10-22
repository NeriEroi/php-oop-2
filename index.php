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
    
    // var_dump($buyer1);
    // var_dump($buyer2);
    // var_dump($whitenike);
    // var_dump($whiteconverse);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Secondo step con i nostri oggetti</title>
</head>
<body>

    <div class="container">

        <div class="buyer_1">

            <h1>
                Acquirente numero uno:
            </h1>

            <h2>Nome:
                <?php echo $buyer1->name ?>
            </h2>
            <h2>Cognome: 
                <?php echo $buyer1->surname ?>
            </h2>
            <h2> Età:
                <?php echo $buyer1->age ?> 
                anni
            </h2>
            <h2> Sconto
                <?php echo $buyer1->discount ?>%
            </h2>
            <h2> Paese
                <?php echo $buyer1->country ?>
            </h2>

        </div>
        
        <div class="buyer_2">

            <h1>
                Acquirente numero due:
            </h1>

            <h2>Nome:
                <?php echo $buyer2->name ?>
            </h2>
            <h2>Cognome: 
                <?php echo $buyer2->surname ?>
            </h2>
            <h2> Età:
                <?php echo $buyer2->age ?> 
                anni
            </h2>
            <h2> Sconto
                <?php echo $buyer2->discount ?>%
            </h2>
            <h2> Paese
                <?php echo $buyer2->country ?>
            </h2>

        </div>

    </div>

    <div class="container_2">

        <div class="nike">

            <h1>
                Attributi Scarpa Nike:
            </h1>

            <h2> Colore:
                <?php echo $whitenike->color ?>
            </h2>

            <h2> Modello:
                <?php echo $whitenike->type ?>
            </h2>

            <h2> Prezzo:
                <?php echo $whitenike->price ?>$
            </h2>
            
        </div>

        <div class="converse">

            <h1>
                Attributi Scarpa Converse:
            </h1>

            <h2> Colore:
                <?php echo $whiteconverse->color ?>
            </h2>

            <h2> Modello:
                <?php echo $whiteconverse->type ?>
            </h2>

            <h2> Prezzo:
                <?php echo $whiteconverse->price ?>$
            </h2>
            
        </div>

    </div>
    

    
    
</body>
</html>