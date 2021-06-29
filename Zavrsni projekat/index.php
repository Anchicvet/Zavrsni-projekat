<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="projekat.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css> -->
   

</head>
<body>
    <?php
        include "./WebSite.php";
        include "./ListaProizvoda.php";
        include "./podaci.php";
        
        $trazeni_podaci = $d->izvrsi_upit("select * from proizvodi;");

        // print_r($trazeni_podaci);
        $listaProizvoda = new ListaProizvoda($trazeni_podaci);
        $ws = new WebSite(array_unique(array_column($listaProizvoda->proizvodi, 'grupa')));
       
        $grupa= isset($_GET['grupa'])?$_GET['grupa']:false;
             
        $ws->header();

        ?>
    <section>
        <div class="contanier" id="pocetna">
                <p>Dobrodošli</p>
                <p>u Maminu Kuhinju</p>
                <p>brend kompanije NATURKOP</p>
       
        </div>

    </section>

<div class="onama" id="onama">
    <img src="pexels-photo-5591712.jpeg" alt="slika">
 <div class="text-onama">
    <p>O nama:</p>
    <p>NATURKOP D.O.O</p>
    <p>NATURKOP d.o.o, je domaća proizvodnja osnovana 2010. godine u Kruševcu, sa osnovnim ciljem da džemove koje su nekada pravile Vaše mame
        i bake ponovo približimo mladim porodicama, koje su zapostavile tradiciju pravljenja zimnice, zbog nemogućnosti tradicionalnih načina pripreme.
        Proizvodi iz asortimana NATURKOP-a, su po prirodi, bez veštačkih aroma, boja i konzervansa, 
        sa pažljivo biranim voćem koje je isključivo iz voćnjaka i domaćinstava voćarskih regiona Srbije.
        <br>
        NATURKOP d.o.o is a domestic production company founded on 2010 in Kruševac, Serbia wich main goal is 
        to bring once made jams by mothers and grandmothers now to young families who neglected the tradition of 
        making winter stores because of inability to make them traditionally.
        The products from NATURKOP’s range are natural without any artificial flavors, 
        colors or additives, made of carefully selected fruits entirely from domestic farms and orchards regions of Serbia.
    </p>
 </div>
</div>

<div class="pro" id="najpr">
    <div class="protext">
        <p>Najprodavaniji proizvodi</p>
        <p>Pored bogatog asortimana naših proizvoda predstavljamo Vam naše najprodavanije artikle:
         </p>
    </div>
    <div class="box-galerija">
        <div class="box1"></button> </div>
        <div class="box2"></button> </div>
        <div class="box3"></button> </div>
    </div>
</div>

<div class="kontakt" id="kontakt">
<form>
    <label>KONTAKTIRAJTE NAS:</label><br>
    <input type="text" placeholder="Vaše ime"><br>
    <input type="text" placeholder="Vaš email"><br>
    <input type="text" placeholder="Vaša poruka"><br>
    <button class="send">Pošaljite</button>
</form>
</div>
        <?php
        //$listaProizvoda->prikazi_proizvode($grupa);
        $ws->footer();
        
    ?>
</body>
</html>