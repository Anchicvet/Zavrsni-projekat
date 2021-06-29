<?php

    class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', $baza);
            // provera
            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);
            //ovo treba iskomentarisati
            else
                echo 'Konektovan!';
        }

        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }
        function izvrsi_upit($upit){
            $odg = $this->conn->query($upit);
            if($odg === false) {
                die('Nije izvrsen upit: '."<br/>" . $this->conn->error."<br/>". $upit);
            } else {
                //$id = $this->conn->insert_id; //ako postoji A_I
                //echo 'Insertovan red sa ID: '.$id;
                //return $id;
                echo "Uspesno izvrsen upit!";
            }
                
        }
        function daj_proizvode(){
            $r = $this->izvrsi_select("select * from proizvodi");
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }
        function daj_proizvod($id){
            $r = $this->izvrsi_select("select * from proizvodi WHERE id_proizvoda=$id");
            if($r['uspesno'] == true){
                return $r['niz'][0];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }

        function snimi_korpu($id_usera, $ukupna_cena, $adresa){
            $this->izvrsi_upit("INSERT INTO `korpa`(`id_usera`, `ukupna_cena`, `adresa_isporuke`) VALUES ($id_usera, $ukupna_cena, '$adresa')");
            return $this->conn->insert_id;
        }
        function snimi_stavku_korpe($id_korpe, $barkod, $kolicina, $cena, $popust, $ukupno){
            $this->izvrsi_upit("INSERT INTO `stavke_korpe`(`id`, `id_korpe`, `kolicina`, `cena`, `popust`) VALUES (NULL, $id_korpe, $kolicina, $cena, $popust)");
        }
    }
    $b = new Baza("projekat");
    // $niz = $b->daj_proizvode();
    // print_r($niz);