<?php
include "klasa_korpa.php";
include "klasa_baza.php";


// KORPA tabela
// id -NULL preskacemo
// vreme - preskacemo (trenutno vreme)
// id_usera - 1  (da je radjeno logovanje, bilo bi $_SESSION['login_id'])
// ukupna_cena - $s preko nove fje
// adresa - "nema veze"
$ukupno = $k->ukupno();
$id_korpe = $b->snimi_korpu(1, $ukupno, "nema veze");
echo "ID korpe je $id_korpe";

// STAVKE_KORPE
// id - null
// id_korpe se dobija iz prethodnog upita
// barkod - id_proizvoda  iz $_SESSION
// kolicina - kol  iz $_SESSION
// cena   iz $_SESSION
// popust 0 
// ukupno - cena*kol
for($i=0; $i<count($_SESSION['stavke_korpe']); $i++){
    $id_p = $_SESSION['stavke_korpe'][$i]['id'];
    $kol_p = $_SESSION['stavke_korpe'][$i]['kolicina'];
    $c_p = $_SESSION['stavke_korpe'][$i]['cena'];
    $b->snimi_stavku_korpe($id_korpe, $id_p, $kol_p, $c_p, 0, $kol_p * $c_p);
}


?>