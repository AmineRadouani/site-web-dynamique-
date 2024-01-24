<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="2.css">
    <link rel="stylesheet" href="21.css">
    <script type="text/javascript" src="2.js"></script>
    <link href=\'https://fonts.googleapis.com/css?family=Open+Sans:400,700\' rel=\'stylesheet\' type=\'text/css\'>
    

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>  


  
<nav>
    <ul>
        <li><a href="1.php">Accueil</a></li>
       
        
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
   
    

   
    <div class="main">
                <h1>Se connecter</h1>
           
            
                <form method="POST">
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" id="username" name="username" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required="required" />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">Se connecter</button><br>

                        <a href="subscribe.php"> S'inscrice à la newsletter</a>
                        <?php

                            if(isset($_POST['submit'])) {

                                $username = $_POST['username'];
                                $password = $_POST['password'];

                                if($username === 'amine' && $password === 'radouani') {

                                    header("Location: dashboard.php");
 
                                    exit;

                                } else 
                                    echo "<p>L'identifiant ou le mot de passe est incorrect</p>";
                            }

                        ?>
                    </div>
                </form>
            </div>
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
                 <li><a href=""> Sites et Monuments  <img src="sites.png" height="20px" alt=""></a></li>
                 <li><a href=""> Index des villes <img src="ville.png" height="20px" alt=""></a></li>
                 <li><a href=""> Map <img src="map.png" height="20px" alt=""></a></li>
                 <li><a href="">  Liens utiles <img src="etat.png" height="20px" alt=""></a></li>
                 <li><a href=""> Contact <img src="sites.png" height="20px" alt=""></a></li>
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
        
</body>

</html>


     