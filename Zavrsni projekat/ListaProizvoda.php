<?php
include "Proizvod.php";

class ListaProizvoda{
            public $proizvodi;
            
            function __construct($podaci){
                $this->proizvodi = [];

                // if (isset($podaci) && $podaci !== null) {
                    for($i=0;$i<count($podaci);$i++){
                        $this->dodaj_proizvod($podaci[$i]);
                    }                        
                    // Do bad things to the votes array
                //  }
                //  else{
                //      echo "greska";
                //  }
                }
            function dodaj_proizvode($podaci){
                for($i=0;$i<count($podaci);$i++){
                    $this->dodaj_proizvod($podaci[$i]);
                }
            }
            function dodaj_proizvod($proizvod_podaci){
                array_push($this->proizvodi, new Proizvod($proizvod_podaci));
            }
            function prikazi_proizvode($grupa=false){
                if($grupa){
                    for($i=0;$i<count($this->proizvodi);$i++)
                        if($this->proizvodi[$i]->grupa == $grupa)
                            $this->proizvodi[$i]->prikazi_proizvod();
                }else{
                    for($i=0;$i<count($this->proizvodi);$i++)
                    $this->proizvodi[$i]->prikazi_proizvod();
                }
            }
            function prikazi_proizvod_sa_id($id){
                for($i=0;$i<count($this->proizvodi);$i++){
                    if($id == $this->proizvodi[$i]->id){
                        $this->proizvodi[$i]->prikazi_proizvod_detaljnije();
                    }
                }
            }
        }

       
?>