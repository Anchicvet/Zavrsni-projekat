<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
        include_once "WebSite.php";
        include_once "podaci.php";
        include_once "ListaProizvoda.php";
        //include_once "proizvodi.php";
        // $listaProizvoda = new ListaProizvoda($podaci);


        $id= isset($_GET['id'])?$_GET['id']:false;
  
 
        // upit za sve. uvek za sve
        $trazeni_podaci = $d->daj_proizvode();

        //uvek pravis listu od svih
        $listaProizvoda = new ListaProizvoda($trazeni_podaci);


        $ws = new WebSite(array_unique(array_column($listaProizvoda->proizvodi, 'grupa')));
        $ws->header();
       

   


   
        $listaProizvoda->prikazi_proizvod_sa_id($id);



        $ws->footer();
    ?>
</body>
</html>
</body>
</html>