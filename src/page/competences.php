<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences</title>
    <link rel="stylesheet" href="../site1.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
</head>
<body>

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

  <section id="sectioncompetence">
    <div class="mise2">

    <h1>Compétences en informatiques:</h1>

<div class="phpcompe">

<p id="compe1">
   <!--Mise en place des titres-->
<?php
include("../app/php1compe.php");
  ?>
</p>
<div class="compe2">
   <!--Mise en place des sous-titres-->
  <?php
include("../app/php2compe.php");
 ?>
  <div class="box">
    <div class="percent">
      <svg>
        <circle cx="70" cy="70" r="70"></circle>
        <circle cx="70" cy="70" r="70"></circle>
      </svg>
      <div class="number">
        <h2>70<span>%</span></h2>
      </div>
    </div>
<!--Mise en place du cercle 1!-->
  </div>
</div>

<div class="compe2">
  <?php
include("../app/php3compe.php");
   ?>
   <div class="box1">
     <div class="percent1">
       <svg>
         <circle cx="70" cy="70" r="70"></circle>
         <circle cx="70" cy="70" r="70"></circle>
       </svg>
       <div class="number1">
         <h2>50<span>%</span></h2>
       </div>
     </div>
<!--Mise en place du cercle 2!-->
   </div>
</div>

<div class="compe2">
  <?php
include("../app/php4compe.php");
   ?>
   <div class="box2">
     <div class="percent2">
       <svg>
         <circle cx="70" cy="70" r="70"></circle>
         <circle cx="70" cy="70" r="70"></circle>
       </svg>
       <div class="number2">
         <h2>80<span>%</span></h2>
       </div>
     </div>
<!--Mise en place du cercle 3!-->
   </div>
 </div>
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
  <a href="experience.php"><img id="suite" src="../image/fleche.png" alt="suite"></a>
   </footer>
<!--Mise en place du footer avec le changement de page!-->



</body>
</html>
