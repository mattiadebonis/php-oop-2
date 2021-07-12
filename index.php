<?php
    include __DIR__ . "/partial/user.php";
    include __DIR__ . "/partial/product.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <!-- php instance -->
    <?php
        $admin = new Admin("Jeff", "Bezos","14/05/1967","Amazon", "JeffBezos", "passjeff","admin");

        $client = new Client("Mattia", "De Bonis","14/05/1987","Nessuna", "Rimmy", "mughini1","si");
        //$client->hello();

        $supplier = new Supplier("Robert", "Kotick","14/05/1956","Activision", "Robb", "passrobb",true);

        $product1 = new Product("Star Wars Battledront 2", 5999,"Preparati a tornare sul fronte della battaglia nel nuovo episodio della serie di Star Wars in alta definizione più venduta di sempre. Diventa l'eroe e combatti nei panni di un intrepido soldato, pilota un leggendario caccia stellare, controlla il tuo personaggio di Star Wars preferito o segui le gesta di un soldato scelto delle forze speciali in una nuova e appassionante storia di Star Wars.",false, "Videogame", true);

        $product2 = new Product("Super Mario Odissey", 4999,"Esplora luoghi incredibili lontano dal Regno dei Funghi mentre ti unisci a Mario e al suo nuovo alleato Cappy in un'enorme avventura 3D da trotto. Usa nuove incredibili abilità, come il potere di catturare e controllare oggetti, animali e nemici, per raccogliere le lune in modo da poter potenziare il dirigibile Odyssey e salvare la principessa Peach dai piani di matrimonio di Bowser! Grazie all'eroico Cappy a forma di cappello, Mario ha nuove mosse che ti faranno ripensare al suo tradizionale gameplay corri e salta, come cap jump, cap throw e capture. Usa le coorti catturate come nemici, oggetti e animali per progredire nel gioco e scoprire un sacco di oggetti da collezione nascosti. E se hai voglia di giocare con un amico, passa loro un controller Joy-Con! Il giocatore 1 controlla Mario mentre il giocatore 2 controlla Cappy. Questa avventura di Mario in 3D in stile sandbox, la prima dall'amato Super Mario 64 del 1996 e il classico per Nintendo GameCube del 2002, Super Mario Sunshine, è piena di segreti e sorprese, oltre a nuovi entusiasmanti regni da esplorare.",false, "Videogame", true);

        $product3 = new Product("Doom Eternal", 2950,"Gli eserciti dell'inferno hanno invaso la Terra. Diventa l'Slayer in un'epica campagna per giocatore singolo per conquistare i demoni attraverso le Dimensioni e fermare la distruzione finale dell'umanità.",false, "Videogame", true);
        
    ?>
    <!-- /php instance -->

    <!-- header -->
    <header class="flex">
        <img id="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1600px-Amazon_logo.svg.png" alt="logo" >
        <div>
            <select name="account" id="account">
                <option value="">     
                    <?php echo $client->name;?>
                </option>
                <option value="">     
                    <?php echo $admin->name;?>
                </option>
                <option value="">     
                    <?php echo $supplier->name;?>
                </option>
            </select>

        </div>
    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        <section class="flex">
            <!-- product -->
            <div class="product">
                <?php 
                    echo("<h2 class='product-name'>" . $product1->name . "</h2>");
                    echo("<h3 class='product-price'>" . $product1->price . "</h3>");
                    echo("<p class='product-description'>" . $product1->description . "</p>");
                    
                ?>
            </div>
            <!-- /product -->

            <!-- product -->
            <div class="product">
                <?php 
                    echo("<h2 class='product-name'>" . $product2->name . "</h2>");
                    echo("<h3 class='product-price'>" . $product2->price . "</h3>");
                    echo("<p class='product-description'>" . $product2->description . "</p>");
                ?>
            </div>
            <!-- /product -->
            
            <!-- product -->
            <div class="product">
                <?php 
                    echo("<h2 class='product-name'>" . $product3->name . "</h2>");
                    echo("<h3 class='product-price'>" . $product3->price . "</h3>");
                    echo("<p class='product-description'>" . $product3->description . "</p>");
                ?>
            </div>
            <!-- /product -->
        </section>
    </main>
    <!-- /main -->

    <!-- aside -->
    <aside>

        <?php
            if ($product1->isBuy == true){
                echo("<h2 class='product-name'>" . $product1->name . "</h2>");
                echo("<h3 class='product-price'>" . $product1->price . "</h3>");
                echo("<p class='product-description'>" . $product1->description . "</p>");
                $product1->isBuyed();
            }
            if ($product2->isBuy == true){
                echo("<h2 class='product-name'>" . $product2->name . "</h2>");
                echo("<h3 class='product-price'>" . $product2->price . "</h3>");
                echo("<p class='product-description'>" . $product2->description . "</p>");
            }
            if ($product3->isBuy == true){
                echo("<h2 class='product-name'>" . $product3->name . "</h2>");
                echo("<h3 class='product-price'>" . $product3->price . "</h3>");
                echo("<p class='product-description'>" . $product3->description . "</p>");
            }

        ?>
    </aside>
    <!-- /aside -->

    
</body>
</html>