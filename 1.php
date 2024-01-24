




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visite morocco </title>
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="21.css">
    <link rel="icon" href="star.icon">
    <link rel="stylesheet" href="test.css">
    <script type="text/javascript" src="1.js"></script>
    <script type="text/javascript" src="2.js"></script>
    <script type="text/javascript" src="21.js"></script>
    <link href=\'https://fonts.googleapis.com/css?family=Open+Sans:400,700\' rel=\'stylesheet\' type=\'text/css\'>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body> 

    <header> 

        <nav>
            <ul>
                <li><a href="1.php">Accueil</a></li>
                <li><a href="#plan">Plan de site</a></li>
                <li><a href="#whoami">Qui sommes-nous ?</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <div id="video-container">
    <video autoplay muted loop>
        <source src="&.mp4" type="video/mp4">
        Votre navigateur ne prend pas en charge la balise vidéo.
    </video>
    



    <div id="content">
         <a href="1.php"><img id="img1" src="1.webp" ></a>
             
<div id="myModal5" class="modal">
    <div class="modal-content">
      <!-- Bouton de fermeture de la modal -->
      <span class="close" onclick="closeModal()"></span>
      
      <!-- Contenu de la modal (iframe YouTube) -->
      <iframe id="videoIframe" src="https://maps.app.goo.gl/5MEVMa95skdfFWJy8" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <script>
    // Ouvrir automatiquement la modal après 3000 millisecondes (3 secondes)
    setTimeout(function() {
      openModal();
    }, 1000);

    function openModal() {
      // Afficher la modal
      document.getElementById('myModal5').style.display = 'block';
    }

    function closeModal() {
      // Masquer la modal
      document.getElementById('myModal5').style.display = 'none';
    }
  </script>
 </div>
         <?php

include 'config.php';

if($conn) {

    $query = "SELECT news_id, titre,resume,contenu, date_publication
              FROM news
              ORDER BY date_publication DESC
              LIMIT 3";

    $result = mysqli_query($conn, $query);   ?>
    
         <div class="main">
         <?php  

while([$id, $titre, $resume,$contenu, $date]= mysqli_fetch_row($result)) {
   
    $date = substr($date, 0, -3);
    
 ?>
            
<div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol viewBox="0 0 24 24" id="expand-more">
      <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
    <symbol viewBox="0 0 24 24" id="close">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
  </svg>
  </div>
<details>

     <summary>
    <p> <small><?php echo $date;?></small></p><br><p> <small><?php echo"$titre";?></small></p> 
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
     </summary>
  <p> <?php echo $resume;?></p> <br> <div width ='500px';>  <?php echo $contenu;?></div>
</details>
        </section>  
        <?php  } ?>    <a class="link-2" href="#">&#x226B; Tous les news</a><br>
                       
                   
                      <P></P> <a class="link-3" style="font-family: arial;" href="subscribe.php">S'inscrire à la newsletter</a></P><br>
                       <a class="link-3" style="font-family: arial;" href="login.php">Se connecter</a>
                       </div>
         <div class="navbar"></div>
         <div class="list">
             <div class="item">
                 <div class="img"></div>
                 <span></span>
                 <span></span>
                 <span></span>                    
             </div>
             
             <div class="item">
                 <div class="img"></div>
                 <span></span>
                 <span></span>
                 <span></span>                    
             </div>
             
             <div class="item">
                 <div class="img"></div>
                 <span></span>
                 <span></span>
                 <span></span>                    
             </div>
             
             <div class="item">
                 <div class="img"></div>
                 <span></span>
                 <span></span>
                 <span></span>                    
             </div>
         </div>
     
         <div class="circle"></div>
         <div class="menu">
             <ul>
                 <li><a href="sites.php"> Sites et Monuments  <img src="sites.png" height="20px" alt=""></a></li>
                 <li><a href="ville.php"> Index des villes <img src="" height="20px" alt=""></a></li>
                 <li><a href="map.php"> Map <img src="map.png" height="20px" alt=""></a></li>
                 <li><a href="lien.php">  Liens utiles <img src="etat.png" height="20px" alt=""></a></li>
                 <li><a href="contact.php"> Contact <img src="sites.png" height="20px" alt=""></a></li>
             </ul>
         </div>			            
         <div class="burger">
             <div class="x"></div>
             <div class="y"></div>
             <div class="z"></div>
         </div>    
     
     </div>	
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="2.js"></script>
    
        <div class="body">
           
                          
              </div>
       
        </div>
           	
           
                
                    
                    
                    
                         
        
   
      </div>
            </div>
                  </div>
                  <section id="whoami">
        <div class="whoamidiv">
            <h1>Qui somme nous:</h1>
            <div class="whoami__desc">
                 
                <img class="whoami__img" src="5.jpg" alt=" man">  
            
                <div class="MontBlanc-font">
                    <p> <smal>Nom et prenom: </smal> <big> AMINE RADOUANI </big> </p><br>
                    <p>Adresse email: RADOUANIAMINE02<span style="font-family: sans-serif;">@</span>gmail.com</p><br>
                    <p><smal>CNE</smal>:<big> F139293702 </big></p><br>
                    <p><smal>GMS</smal>:<big> +212 6 99 22 18 67 </big></p><br>
                    
                    

                     
                </div>
            </div>
        </div>
    </section>                      </div>
  <div class="A2">
  
   

    
            <!-- <div class="glass-btn blue-btn"> -->
<!--              
              <img src="f.jpeg" alt="facebook" style="width: 5.5em;">
            </div>
          
            <div class="glass-btn red-btn">
            
              <img src="i.png" alt="youtube" style="width: 6em;">
            </div>
            
            <div class="glass-btn amber-btn">
            
              <img src="l.png" alt="soundcloud" style="width: 6em;">
            </div> -->
          
          </div>
    </section>
    <section id="plan">
        <div class="plandiv">
            <h1>Plan de site:</h1>
            <div class="links">
                <a href="sites.php">
                    <div class="image">
                        <img class="image__img" src="aa.jpg" alt="monuments">
                        <div class="image__overlay">
                            <h1>Sites et monuments</h1>
                        </div>
                    </div>
                </a>
                <a href="ville.php">
                    <div class="image">
                        <img class="image__img" src="bato.jpg" alt="index des villes">
                        <div class="image__overlay">
                            <h1>Index des villes</h1>
                        </div>
                    </div>
                </a>
                <a href="map.php">
                    <div class="image">
                        <img class="image__img" src="maroc.jpg" alt="map du Maroc">
                        <div class="image__overlay">
                            <h1>Map du Maroc</h1>
                        </div>
                    </div>
                </a>
                <a href="lien.php">
                    <div class="image">
                        <img class="image__img" src="lien.jpg" alt="liens utiles">
                        <div class="image__overlay">
                            <h1>Liens utiles</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Visit Morocco</p>

    </footer>
</body>
</html>




<?php   


 } else 
die("Database connection failed!" . mysqli_error());

?>

    
