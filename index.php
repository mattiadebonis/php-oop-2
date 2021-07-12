<?php
    include __DIR__ . "/partial/user.php";
    include __DIR__ . "/partial/product.php";
    include __DIR__ . "/coordinator.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <!-- php instance -->
    <?php
        $admin = new Admin("Jeff", "Bezos","14/05/1967","Amazon", "JeffBezos", "passjeff","Via Ferdinando Magellano", 2, 40033, "Bologna", "Italy","admin");

        $client = new Client("Mattia", "De Bonis","14/05/1987","Nessuna", "Rimmy", "mughini1","Via Ferdinando Magellano", 2, 40033, "Bologna", "Italy","si", 1245);
        $supplier = new Supplier("Robert", "Kotick","14/05/1956","Activision", "Robb", "passrobb","Via Ferdinando Magellano", 2, 40033, "Bologna", "Italy",true);

        $product1 = new Product("Star Wars Battlefront 2", 59,"Preparati a tornare sul fronte della battaglia nel nuovo episodio della serie di Star Wars in alta definizione più venduta di sempre. Diventa l'eroe e combatti nei panni di un intrepido soldato, pilota un leggendario caccia stellare, controlla il tuo personaggio di Star Wars preferito o segui le gesta di un soldato scelto delle forze speciali in una nuova e appassionante storia di Star Wars.",false, "Videogame", true, "https://images-na.ssl-images-amazon.com/images/I/81rI22vehFL._AC_SL1500_.jpg");

        $product2 = new Product("Super Mario Odissey", 49,"Esplora luoghi incredibili lontano dal Regno dei Funghi mentre ti unisci a Mario e al suo nuovo alleato Cappy in un'enorme avventura 3D da trotto.",false, "Videogame", true, "https://images-na.ssl-images-amazon.com/images/I/91JZdTYcjFL._AC_SY500_.jpg");

        $product3 = new Product("Doom Eternal", 29,"Gli eserciti dell'inferno hanno invaso la Terra. Diventa l'Slayer in un'epica campagna per giocatore singolo per conquistare i demoni attraverso le Dimensioni e fermare la distruzione finale dell'umanità.",false, "Videogame", true, "https://images-na.ssl-images-amazon.com/images/I/91qm95y+rZL.jpg");
        
    ?>
    <!-- /php instance -->

    <!-- header -->
    <header class="flex">
        <!-- logo -->
        <div>
            <img id="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1600px-Amazon_logo.svg.png" alt="logo" >
        </div>
        <!-- /logo -->

        <!-- sser -->
        <div>
            <select name="account" id="account">
                <option value="">     
                    <?php 
                        echo $client->name. " ". $client->surname . " <span class='text-uppercase'>Cliente</span>";

                    ?>
                </option>
                <option value="">     
                    <?php 
                        echo $admin->name . " " . $admin->surname." <span class='text-uppercase'>". $admin->role ."</span>"
                    ?>
                </option>
                <option value="">     
                    <?php 
                        echo $supplier->name. " ". $supplier->surname . " <span class='text-uppercase'>Fornitore</span>";
                    ?>
                </option>
            </select>
        </div>
        <!-- /user -->
    </header>
    <!-- /header -->

    <!-- main -->
    <main class="flex">
        
        <!-- shop -->
        <section id="shop" class="flex">
            <!-- product -->
            <div class="product">
                <?php 
                    echo("<img class='product-cover' src='". $product1->urlCover ."' alt='product1'>");
                    echo("<h2 class='product-name'>" . $product1->name . "</h2>");
                    echo("<h3 class='product-price'>" . $product1->price . "</h3>");
                    echo("<p class='product-description'>" . $product1->description . "</p>");

                    //put product on the basket
                    $product1-> isBuyed(true);
                ?>
            </div>
            <!-- /product -->

            <!-- product -->
            <div class="product">
                <?php 
                    echo("<img class='product-cover' src='". $product2->urlCover ."' alt='product2'>");
                    echo("<h2 class='product-name'>" . $product2->name . "</h2>");
                    echo("<h3 class='product-price'>" . $product2->price . "</h3>");
                    echo("<p class='product-description'>" . $product2->description . "</p>");
                ?>
            </div>
            <!-- /product -->
            
            <!-- product -->
            <div class="product">
                <?php 
                    echo("<img class='product-cover' src='". $product3->urlCover ."' alt='product3'>");
                    echo("<h2 class='product-name'>" . $product3->name . "</h2>");
                    echo("<h3 class='product-price'>" . $product3->price . "</h3>");
                    echo("<p class='product-description'>" . $product3->description . "</p>");
                ?>
            </div>
            <!-- /product -->
        </section>
        <!-- shop -->

        <!-- basket -->
        <section id="basket">

            <h1>Carrello</h1>
            <?php
                if ($product1->isBuy == true){
                    echo("<p>" . $product1->name . "</p>");
                    echo("<span>" . $product1->price . "€</span>");
 
                }
                if ($product2->isBuy == true){
                    
                    echo("<p>" . $product2->name . "</p>");
                    echo("<span>" . $product2->price . "€</span>");
                }
                if ($product3->isBuy == true){
                    
                    echo("<p>" . $product3->name . "</p>" . "<span>" . $product3->price . "€</span>");
                    echo("<span>" . $product3->price . "€</span>");
                }

            ?>

        </section>
        <!-- /basket -->
    </main>
    <!-- /main -->

    

    
</body>
</html>