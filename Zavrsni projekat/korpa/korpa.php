<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../projekat.css">
</head>
<body>
<?php
include "klasa_korpa.php";
include "../WebSite.php";
include "../ListaProizvoda.php";
include "../podaci.php";

$trazeni_podaci = $d->izvrsi_upit("select * from proizvodi;");

// print_r($trazeni_podaci);
$listaProizvoda = new ListaProizvoda($trazeni_podaci);
$ws = new WebSite(array_unique(array_column($listaProizvoda->proizvodi, 'grupa')));
       
$grupa= isset($_GET['grupa'])?$_GET['grupa']:false;
     
$ws->header();

$k->prikazi();

?>
    <a href="snimi_korpu.php">NARUCI PROIZVODE</a>
    <a href="proizvodi.php">POVRATAK NA PROIZVODE</a>

<?php
        $ws->footer();
?>
</body>
</html>