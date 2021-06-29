<link rel="stylesheet" href="projekat.css">
<?php

        class Proizvod{
            public $id,$naziv,$slika,$opis,$cena,$grupa;

            function __construct($niz){
                $this->id = $niz['id_proizvoda'];
                $this->ime = $niz['naziv'];
                $this->slika = $niz['slika'];
                $this->opis = $niz['opis'];
                $this->cena = $niz['cena'];
                $this->grupa = $niz['grupa'];
            }


            function prikazi_proizvod(){
                echo "<div  class='prikazi'>";
                echo "<p><img src='.$this->slika.'></p>";
                echo "<p><b>".$this->ime."</b></p>";
                echo "<p><a href='detaljnije.php?id=$this->id'>Detaljnije o proizvodu...</a></p>";
                echo "</div>";
            }
            function prikazi_proizvod_detaljnije(){
                
               
            echo  "<div class='detaljnije'>";
                    echo "<img src='.$this->slika.'>";
                            echo "<div class='text-detaljnije'>";
                               echo  "<p>".$this->ime."</p>";
                                echo "<p>".$this->opis."</p>";
                               echo  "<p> Cena proizvoda: ".$this->cena." din.</p>";
                               echo "<button class='dodaj'>Dodaj u korpu <i class='fas fa-shopping-cart'></i></button>";
                           echo  "</div>";
            echo  "</div>";
            }
            
        }    

?>



