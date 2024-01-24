<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="2.css">
    <link rel="stylesheet" href="21.css">
    <link rel="icon" href="star.icon">
    <script type="text/javascript" src="2.js"></script>
    <link href=\'https://fonts.googleapis.com/css?family=Open+Sans:400,700\' rel=\'stylesheet\' type=\'text/css\'>
    <link rel="stylesheet" href="ville.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="13.css">
    <script defer src="13.js"></script>
</head>
  
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
                 <li><a href="contact.php"> Contact </a></li>
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
    <div class="header">
        <h1>welcome back, MR.Amine </h1>
        <a href="1.php">Disconnect</a>
    </div>
    <div class="ajouter">
        <p>Ajouter des news: &nbsp;&nbsp;&nbsp;</p>
        <button class="btn btn-ajouter">Ajouter</button>
    </div>
    <table align="center" border="2px">
        <tr>
            <th>Titre</th>
            <th width="400">Résumé</th>
            <th width="190">Date de publication</th>
            <th>Actions</th>
        </tr>
        <?php

include 'config.php';

            if($conn) {

                $query = "SELECT news_id, titre, resume, date_publication
                          FROM news
                          ORDER BY date_publication DESC";

                $result = mysqli_query($conn, $query);

                while([$id, $titre, $resume, $date]= mysqli_fetch_row($result)) {
                    echo "<tr>
                            <td>$titre</td>
                            <td>$resume</td>
                            <td>$date</td>
                            <td>
                                <form action='dashboard.php' method='post'>
                                    <button data-number='$id' class='btn-modify'>Modifier</button>
                                    <button type='submit' name='delete-$id'>Supprimer</button>
                                </form>
                            </td>
                        </tr>";
                }

            } else 
                die("Database connection failed!" . mysqli_error());

        ?>
    </table>



    <div class="modal-ajouter modal hidden">
        <button class="close-button">&times;</button>
        <form class="form" action="dashboard.php" method="post">
            <h1> Ajouter des news </h1>

            <fieldset>

                <label for="titre">Titre:<label>
                        <input type="text" id="titre" name="titre" required>

                        <label for="resume">résumé:</label>
                        <textarea  class="resume" id="resume" name="resume" required></textarea>

                        <label for="contenu">contenu:</label>
                        <textarea  class="contenu" id="contenu" name="contenu" required></textarea>

            </fieldset>
            <button class="btn-form" type="submit" name="submit-1">Ajouter</button>
        </form>
    </div>

    <?php

include 'config.php';
        if($conn) {

            $query = "SELECT news_id, titre, resume, contenu
                      FROM news";

            $result = mysqli_query($conn, $query);

            while([$id, $titre, $resume, $contenu]= mysqli_fetch_row($result)) {

                echo "<div class='news-$id modal hidden'>
                        <button class='close-button'>&times;</button>
                        <form class='form' action='dashboard.php' method='post'>
                            <h1> Modifier des news </h1>
                            <fieldset>
        
                                <label for='titre'>Titre:<label>
                                <input type='text' id='titre' name='titre' value='$titre' required>
        
                                <label for='resume'>résumé:</label>
                                <textarea class='resume' id='resume' name='resume' required>$resume</textarea>
        
                                <label for='contenu'>contenu:</label>
                                <textarea class='contenu' id='contenu' name='contenu' required>$contenu</textarea>
        
                            </fieldset>
                            <button class='btn-form' type='submit' name='submitnews-$id'>Modifier</button>
                        </form>
                    </div>";
                
            }

        }

    ?>

    <div class="overlay hidden"></div>

</body>
<footer>
        <p>&copy; 2023 Visit Morocco</p>

    </footer>
</html>

<?php

if(isset($_POST['submit-1'])) {
    
    $titre = $_POST['titre'];
    $resume = $_POST['resume'];
    $contenu = $_POST['contenu'];

    include 'config.php';

    if($conn) {

        $query = "INSERT INTO news(titre, resume, contenu) VALUES
                  ('$titre', '$resume', '$contenu')";

        $result = mysqli_query($conn, $query);

    } else 
        die("Database connection failed!" . mysqli_error());
}  ?>
<?php
include 'config.php';
if($conn) {

    $query = "SELECT MAX(news_id)
                FROM news";

    $result = mysqli_query($conn, $query);
    [$max_id] = mysqli_fetch_row($result);
    
    for($id = 1; $id <= $max_id; $id++) 
        if(isset($_POST["delete-$id"])) {
            
            $query = "DELETE FROM news
                      WHERE news_id = $id";

            $result = mysqli_query($conn, $query);

        }

    for($id = 1; $id <= $max_id; $id++) 
        if(isset($_POST["submitnews-$id"])) {

            $titre = $_POST['titre'];
            $resume = $_POST['resume'];
            $contenu = $_POST['contenu'];
            
            $query = "UPDATE news
                      SET titre = '$titre',
                      resume = '$resume',
                      contenu = '$contenu'
                      WHERE news_id = $id";

            $result = mysqli_query($conn, $query);

        }


} else 
    die("Database connection failed!" . mysqli_error());

?>