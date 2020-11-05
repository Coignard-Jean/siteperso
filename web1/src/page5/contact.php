<?php
include("../app/php1contact.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../site1.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
    <style>
    form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 400px;


  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  color: white;
  border: 1px solid #CCC;
  border-radius: 1em;
  position: relative;
  bottom: 10px
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
}

input, textarea {
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
  font: 1em sans-serif;

  /* Pour que tous les champs texte aient la même dimension */
  width: 300px;
  box-sizing: border-box;

  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}

textarea {
  /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
  vertical-align: top;

  /* Pour donner assez de place pour écrire du texte */
  height: 5em;
}

.g-recaptcha {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 92px; /* même taille que les étiquettes */
}

#bouton{
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: 92px
}

    </style>
</head>
<body>
<div class="body5">
  <header>

    <p>Jean Coignard</p>

<nav>
  <ul>
    <li><a href="../index.php">Home Page</a></li>
    <li><a href="../page1/propos.php">A propos</a></li>
    <li><a href="../page2/compétences.php">Compétences</a></li>
    <li><a href="../page3/expérience.php">Experience</a></li>
    <li><a href="../page4/formation.php">Formation</a></li>
    <li><a href="../page5/contact.php">Contact</a></li>
  </ul>
</nav>

  </header>

  <section id="sectioncontact">

<img id="gmail-image" src="../image/mail.png" alt="gmail">

<form action="traitement.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" placeholder="Saisir votre prénom" name="nom" required>
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="email" placeholder="Saisir votre email" required>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" rows="3" placeholder="Saisir votre commentaire" name="message" required></textarea>
    </div>
   <div class="bouton">
   <div class="g-recaptcha" data-sitekey="6Lfzl90ZAAAAAGf5zETlsytdGBn-yf1DsoZvD1ZP"></div>
   <br>
   <input type="submit" id="bouton" value="Envoyer" name="submitpost">
 </div>
</form>




  </section>

  <div class="pied-page">
    <p>Jean Coignard</p>
  </div>
</div>
  <div class="reseaux">
    <a href="https://fr-fr.facebook.com/public/Jean-Coignard"><img class="logo-reseaux" src="../image/facebook1.png" alt="facebook"></a>
    <a href="https://twitter.com/jeancgnd"><img class="logo-reseaux" src="../image/twitter2.png" alt="twitter"></a>
    <a href="https://www.instagram.com/jean.cgnd/"><img class="logo-reseaux" src="../image/instagram1.png" alt="instagram"></a>
  </div>
  <footer id="mentions1">
    <a href="mention.php">Mentions Légales</a>
   </footer>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
