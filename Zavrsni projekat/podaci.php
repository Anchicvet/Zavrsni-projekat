<?php
 class Baza{
   public $conn;
    public $podaci;

   function __construct($baza){
       $this->conn = new mysqli('localhost', 'root', '', $baza);
  
       if ($this->conn->connect_error)
           die('Greska: '. $this->conn->connect_error);
      
       
   }

     public $upit = "select * from proizvodi;";

    public function izvrsi_upit($upit){
        $podaci =$this->conn->query($upit);
        if($podaci === false)
            return ['uspesno'=>false, 'poruka'=>$this->conn->error];
        else{
           $niz = $podaci->fetch_all(MYSQLI_ASSOC);
           return $niz; //['uspesno'=>true, 'niz'=>$niz];
           //return $podaci;
           exit();
        }
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


    function daj_proizvode(){
        $r = $this->izvrsi_select("select * from proizvodi");
        if($r['uspesno'] == true){
            return $r['niz'];
        }else{
            die("Neuspesan upit: ".$r['poruka']);
        }
    }


    function prikazi_proizvode(){
       $r= $this->izvrsi_upit("select * from proizvodi");
       if($r ['uspesno']== true){
           return $r['niz'];
       }else{
           die("neuspesan upit:". $r['poruka']);
          
       }

       exit();
   }

  
      

   }


$d= new Baza ('projekat');
?>