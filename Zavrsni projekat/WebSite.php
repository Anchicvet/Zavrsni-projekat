
<link rel="stylesheet" href="projekat.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
<?php
  
   
    class WebSite {
        public $grupe;


        function __construct($grupe){
            $this->grupe=[];
            foreach($grupe as $grupa){
               array_push($this->grupe,$grupa) ;
            }
        }

        function header(){
           ?>
        
            <nav>
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i>  Početna</a></li>
                    <li><a href="index.php#onama">O nama</a></li> 
                    <li class="dropdown">
                        <a>Proizvodi</a>
                        <div class="dropdown-content">
                        <ul class="dropdown">
                        <?php
                            foreach($this->grupe as $grupa){
                                echo "<li><a href='proizvodi.php?grupa=$grupa'>$grupa</a></li>";
                            }
                            ?>
                         </ul>
                        </div>
                    </li>
                    <li><a href="index.php#najpr">Najprodavanije</a></li>
                    <li><a href="prodavnice.php">Prodajni objekti</a></li>
                    <li><a href="index.php#kontakt">Kontakt</a></li>
                    <li><a href="korpa.php"><i class="fas fa-shopping-cart"></i></a></li>

                   
                </ul>
            </nav>
           
        
        <?php
        }
        
      
        function footer(){
            ?>
        
                    <footer>
                        <div class="footer-content">
                            <h3>&nbsp NATURKOP</h3>
                             <p> &nbsp&nbsp&nbsp Poštujemo tradiciju!</p>
                                    <ul class="socials">
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                     </ul>
                        </div>
                                 <div class="footer-bottom">
                                        <p>copyright &copy;2021 Naturkop. designed by <span>Anchi.Cvet</span></p>
                                </div>
                    </footer>

        <?php
        }
    }
        ?>