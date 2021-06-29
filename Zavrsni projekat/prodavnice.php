<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="projekat.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include "WebSite.php";
        include "listaproizvoda.php";
        include "podaci.php";

        $trazeni_podaci = $d->izvrsi_upit("select * from proizvodi;");
        $listaProizvoda = new ListaProizvoda($trazeni_podaci);
        $ws = new WebSite(array_unique(array_column($listaProizvoda->proizvodi, 'grupa')));
       
        $grupa= isset($_GET['grupa'])?$_GET['grupa']:false;
             

        $ws->header();
    ?>

            <div class="prodavnice">
                <div class="text-prod">
                    
                        <p>Proizvode kompanije NATURKOP mozete naći u sledećim prodavnicama:</p>
                </div>
                <div class="pbox-galerija">
                    <div class="pbox"><a href="https://mojkatalog.rs/aman"><img src="aroma.png" alt="aroma"></a> </div>
                    <div class="pbox"> <a href="https://www.dis.rs"><img src="dis.png" alt="dis"></a></div>
                    <div class="pbox"> <a href="https://tekijanka.com/maloprodajni-objekti/"><img src="tekijanka.png" alt="tekijanka"></a></div>
                    <div class="pbox"><a href="https://www.gomex.rs/prodajna-mreza"><img src="Gomex.jpg" alt="Gomex"></a> </div>
                    <div class="pbox"> <a href="https://univerexport.rs/sr/prodavnice"><img src="univer.png" alt="univer"></a></div>
                    <div class="pbox"><a href="http://www.prodavnicasunce.rs/prodavnice"><img src="sunce.png" alt="sunce"></a> </div>
                    <div class="pbox"> <a href="https://europrom.rs/prodajni-objekti/"><img src="europrom-logo.png" alt="europrom"></a></div>
                    <div class="pbox"> <a href="https://medius.rs/prodajna-mreza/"><img src="medius.png" alt="medius"></a></div>
                    <div class="pbox"><a href="https://podunavlje.rs/prodavnice/"><img src="Podunavlje.png" alt="Podunavlje"></a> </div>
                    <div class="pbox"> <a href="https://www.spmarketi.com/index.php/sr/maloprodaja"><img src="sp.png" alt="sp"></a></div>
                </div>
            </div>



    <?php
        $ws->footer();

    ?>
</body>
</html>