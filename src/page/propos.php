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
<div class="body1">


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

  <section id="sectionpropos">
    <p id="propos">
<?php
include("../app/phppropos.php");
 ?>
 <!--Mise en place des titres-->
  </p>

  <p id="Presentation">Etudiant de 21 ans, actuellement en 1er année de BTS SIO (Services informatiques aux organisations).
  Je dispose d'un baccalauréat Scientifique obtenu en juin 2018. Je dispose également d'une expérience
  professionnelle en tant qu'Agent polyvalent en restauration, ces expériences professionnelles m'ont permis de
  développer des qualités dont le travail en équipe, l'écoute et une communication plus approfondie. Durant mes
  années d'études, j'ai eu l'opportunité d'effectuer un stage avec une infirmière libérale, ce stage m'a permis d'avoir
  des responsabilités et d'être organisé (avec les personnes âgées).
  Je suis une personne rigoureuse, à l'écoute et bon communicateur. J'aime beaucoup apprendre et enrichir mes connaissances dans des domaines variés.</p>

  <img id="photomoi1" src="../image/moi.jpg" alt="Photo de moi">

 <!--Mise en place de la bar des réseaux sociaux!-->
<div class="reseaux">
  <a href="https://fr-fr.facebook.com/public/Jean-Coignard"><img class="logo-reseaux" src="../image/facebook1.png" alt="facebook"></a>
  <a href="https://twitter.com/jeancgnd"><img class="logo-reseaux" src="../image/twitter2.png" alt="twitter"></a>
  <a href="https://www.instagram.com/jean.cgnd/"><img class="logo-reseaux" src="../image/instagram1.png" alt="instagram"></a>
</div>
  </section>
</div>

  <footer>
    <p>Jean Coignard</p>
    <a href="competences.php"><img id="suite" src="../image/fleche.png" alt="suite"></a>
  </footer>
<!--Mise en place du footer avec le changement de page!-->



</body>
</html>
