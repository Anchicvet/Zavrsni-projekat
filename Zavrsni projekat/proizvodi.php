<link rel="stylesheet" href="projekat.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
    include "WebSite.php";
    include "podaci.php";
    include "ListaProizvoda.php";
    include_once "Proizvod.php";
     
    $grupa= isset($_GET['grupa'])? $_GET['grupa'] : false;
  
 
    // upit za sve. uvek za sve
    $trazeni_podaci = $d->daj_proizvode();

    //uvek pravis listu od svih
    $listaProizvoda = new ListaProizvoda($trazeni_podaci);

    $ws = new WebSite(array_unique(array_column($listaProizvoda->proizvodi, 'grupa')));
    $ws->header();
        
    $listaProizvoda->prikazi_proizvode($grupa);

    $ws->footer();
    
   
?>