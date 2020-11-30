<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience</title>
    <link rel="stylesheet" href="../site1.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
</head>
<body>
<div class="body3">
  <header>

    <p>Jean Coignard</p>
<!--Mise en place de la navbar!-->
<nav>
  <ul>
    <li><a href="../index.php">Home Page</a></li>
    <li><a href="propos.php">A propos</a></li>
    <li><a href="competences.php">Compétences</a></li>
    <li><a href="experience.php">Experience</a></li>
    <li><a href="formation.php">Formation</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>

  </header>

  <section id="sectionexperience">

<h1>Expérience professionnelle</h1>
<div id="expe1">
   <!--Mise en place de la présentation de Festyland-->
    <?php
include("../app/php1expe.php");
    ?>
  <img class="entreprise" src="../image/festyland.png" alt="fesyland">
</div>
<div id="expe2">
   <!--Mise en place de la pésentation de Flunch-->
    <?php
include("../app/php2expe.php");
    ?>
<img class="entreprise" src="../image/flunch.jpg" alt="flunch">
</div>

  <p class="textexpe">
    Je dispose de <b>trois expériences
    professionnelles </b>depuis mes 18 ans.
    Cela m'a permis d'avoir un emploi<b> à
    temps partiel,</b> pour occuper mon temps
    libre durant la période des vacances
    scolaires. Travaillez m'a permis d'une
    part <b>d'appréhender</b> une fois de plus le
    monde professionnel tout en me permettant
    d'accéder à une rémunération qui sera
    source d'aide dans la poursuite
    de mes études.

  </p>
<a id="cv" href="../../cv-Jean-Coignard.pdf">Télécharger mon CV</a>
<br>
<br>
<br>
<br>
<br>
 <!--Mise en place de la bar des réseaux sociaux!-->
<div class="reseaux">
  <a href="https://fr-fr.facebook.com/public/Jean-Coignard"><img class="logo-reseaux" src="../image/facebook1.png" alt="facebook"></a>
  <a href="https://twitter.com/jeancgnd"><img class="logo-reseaux" src="../image/twitter2.png" alt="twitter"></a>
  <a href="https://www.instagram.com/jean.cgnd/"><img class="logo-reseaux" src="../image/instagram1.png" alt="instagram"></a>

</div>

</div>


  </section>

  <footer>
    <p>Jean Coignard</p>
  <a href="formation.php"><img id="suite" src="../image/fleche.png" alt="suite"></a>
   </footer>
<!--Mise en place du footer avec le changement de page!-->



</body>
</html>
