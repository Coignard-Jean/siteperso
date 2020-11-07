<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propos</title>
    <link rel="stylesheet" href="../site1.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
</head>
<body>
<div class="body4">
  <header>

    <p>Jean Coignard</p>
<!--Mise en place de la navbar!-->
<nav>
  <ul>
    <li><a href="../index.php">Home Page</a></li>
    <li><a href="../page1/propos.php">A propos</a></li>
    <li><a href="../page2/compétences.php">Compétences</a></li>
    <li><a href="../page3/expérience.php">Experience</a></li>
    <li><a href="../page4/formulaire.php">Formation</a></li>
    <li><a href="../page5/contact.php">Contact</a></li>
  </ul>
</nav>

  </header>

  <section id="sectionformation">

    <h1>Formation</h1>

    <div class="forma1">
       <!--Mise en place des formation-->
    <?php
include("../app/php1forma.php");
      ?>
      <img class="ecole" src="../image/sup-avenir.png" alt="fesyland">
    </div>
    <div class="forma1">
    <?php
include("../app/php2forma.php");
      ?>
      <img class="ecole" src="../image/universite-caen.png" alt="fesyland">
    </div>
    <div class="forma1">
    <?php
include("../app/php3forma.php");
      ?>
      <img class="ecole" src="../image/universite-caen.png" alt="fesyland">
    </div>
    <div class="textforma">
       <!--pésentation des écoles-->
      <p>Le Brevet de Technicien Supérieur <b>Services informatique aux Organisations (SIO)</b> s’adresse à ceux qui
         souhaitent se former en deux ans aux métiers d’administrateur réseau ou de développeur pour intégrer
         directement le marché du travail ou continuer des études dans le domaine de l’informatique.</p>
      <p><b>Langages et outils:</b>SISR/SLAM</p>
      <br>
      <p><b>La licence chimie</b> est une formation diplômante de niveau II (bac+3) qui permet d’obtenir 180 crédits
         ECTS et qui permet d’acquérir des bases solides dans les grands domaines de l’analyse et de la production
          chimique contemporaine.</p>
      <p><b>Programme en licence chimie:</b>Chimie moléculaire/Chimie du solide et des matériaux/Chimie physique/Chimie du vivant</p>
      <br>
      <p><b>La licence d’informatique</b> est une formation généraliste et théorique qui permet d’acquérir une solide culture
         informatique dans de nombreux domaines (algorithme, programmation, logique, algèbre) ainsi que des connaissances pratiques.</p>
      <p><b>Le programme en Informatique:</b>Systèmes d’exploitation/Programmation/Concepts informatiques</p>

    </div>

</div>
 <!--Mise en place de la bar des réseaux sociaux!-->
<div class="reseaux">
  <a href="https://fr-fr.facebook.com/public/Jean-Coignard"><img class="logo-reseaux" src="../image/facebook1.png" alt="facebook"></a>
  <a href="https://twitter.com/jeancgnd"><img class="logo-reseaux" src="../image/twitter2.png" alt="twitter"></a>
  <a href="https://www.instagram.com/jean.cgnd/"><img class="logo-reseaux" src="../image/instagram1.png" alt="instagram"></a>

</div>




  </section>

  <footer>
    <p>Jean Coignard</p>
  <a href="../page5/contact.php"><img id="suite" src="../image/fleche.png" alt="suite"></a>
   </footer>
<!--Mise en place du footer avec le changement de page!-->



</body>
</html>
