<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sites et Monuments</title>
    <link rel="stylesheet" href="2.css">
    <link rel="stylesheet" href="21.css">
    <link rel="icon" href="star.icon">
    <script type="text/javascript" src="2.js"></script>
    <link href=\'https://fonts.googleapis.com/css?family=Open+Sans:400,700\' rel=\'stylesheet\' type=\'text/css\'>
    <link rel="stylesheet" href="ville.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> 
   
</head>
    
<body> 




  
<nav>
    <ul>
        <li><a href="1.php">Accueil</a></li>
       
        
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav> 

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
                 <li><a href="sites.php"> Sites et Monuments  </a></li>
                 <li><a href="ville.php"> Index des villes </a></li>
                 <li><a href="map.php"> Map </a></li>
                 <li><a href="lien.php">  Liens utiles </a></li>
                 <li><a href="contact.php"> Contact</a></li>
             </ul>
         </div>			            
         <div class="burger">
             <div class="x"></div>
             <div class="y"></div>
             <div class="z"></div>
         </div>    
     
     </div>	
     <script src="2.js"></script>
</div>
</header>

<body>
    
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

<img src="maroc.jpg"  width="800px"
    height="500px">



    <a href="https://maps.app.goo.gl/5MEVMa95skdfFWJy8"> Voire plus </a>
</body>
<footer>
        <p>&copy; 2023 Visit Morocco</p>

    </footer>