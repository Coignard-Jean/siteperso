<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propos</title>
    <link rel="stylesheet" href="../Site.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
</head>
<body>

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

  <section id="sectionexpérience">

<h1>Expérience professionnelle</h1>

<div id="expe1">
    <?php
include("php1.php");
    ?>
  <img class="entreprise" src="../image/festyland.png" alt="fesyland">
</div>
<div id="expe2">
    <?php
include("php2.php");
    ?>
<img class="entreprise" src="../image/flunch.jpg" alt="flunch">
</div>

  <p class="textexpé">
    Je dispose de trois expériences
    professionnelles depuis mes 18 ans.
    Cela m'a permit d'avoir un emploi à
    temps partiel, pour occuper mon temps
    libre durant la période des vacances
    scolaires. Travailler m'a permit d'une
    part d'appréhender une fois de plus le
    monde professionnel tout en me permettant
    d'accéder à une rémunération qui sera
    source d'aide dans la poursuite
    de mes études.

  </p>

<div class="reseaux4">
  <a href="https://fr-fr.facebook.com/public/Jean-Coignard"><img class="logo-reseaux" src="../image/facebook1.png" alt="facebook"></a>
  <a href="https://twitter.com/jeancgnd"><img class="logo-reseaux" src="../image/twitter2.png" alt="twitter"></a>
  <a href="https://www.instagram.com/jean.cgnd/"><img class="logo-reseaux" src="../image/instagram1.png" alt="instagram"></a>

</div>

<a id="cv" href="cv-Jean-Coignard.odt">Télécharger mon CV</a>


  </section>

  <footer>
    <p>Jean Coignard</p>
  <a href="../page4/formation.php"><img id="suite" src="../image/fleche.png" alt="suite"></a>
   </footer>




</body>
</html>
