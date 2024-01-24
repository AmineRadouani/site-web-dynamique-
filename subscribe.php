









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="2.css">
    <title>Document</title>
</head>
<body>
<header> 

<nav>
    <ul>
        <li><a href="1.html">Accueil</a></li>
        <li><a href="#plan-du-site">Plan de site</a></li>
        <li><a href="whoami">Qui sommes-nous ?</a></li>
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
         <a href="1.html"><img id="img1" src="1.webp" ></a>
<div class="main">
    <h2>Abonnez-vous à notre Newsletter</h2>
    <p>Recevez les dernières actualités et mises à jour directement dans votre boîte de réception.</p>

    <!-- Formulaire d'abonnement avec nom, prénom et e-mail -->
    <form action="subscribe.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Adresse Email:</label>
    
    
    
    
    
        <input type="email" name="email" required>

        <input type="submit" value="S'abonner">
    </form>
</div>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    @$nom = $_POST['nom'];
    @$prenom = $_POST['prenom'];
    @$email = $_POST['email'];


    
    // Vérification de la validité de l'adresse e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse e-mail invalide.";
        exit();
    
    }

    // Ajout du nom, prénom et adresse e-mail dans la table Internaute
    $stmt = $conn->prepare("INSERT INTO Internaute (nom, prenom, email) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $prenom, $email]);

    // Redirection après l'inscription
    header("Location: 1.php");
    exit();
}
?>

</body>
</html>

 











     

