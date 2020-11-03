<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expérience</title>
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

  <section id="sectioncompetence">
    <h1>Compétences en informatiques:</h1>

<div class="phpcompe">

<p id="compe1"><strong>
<?php
include("php1.php");
  ?>
</strong>
</p>
<p id="compe2">
  <?php
include("php2.php");
 ?>
 <progress value="70" max="100">70%</progress>
</p>


<p id="compe3">
  <?php
include("php3.php");
   ?>
     <progress  value="50" max="100">50%</progress>
</p>

<p id="compe4">
  <?php
include("php4.php");
   ?>
   <progress  value="80" max="100">80%</progress>
 </p>
</div>


<div class="reseaux3">
  <a href="https://fr-fr.facebook.com/public/Jean-Coignard"><img class="logo-reseaux" src="../image/facebook1.png" alt="facebook"></a>
  <a href="https://twitter.com/jeancgnd"><img class="logo-reseaux" src="../image/twitter2.png" alt="twitter"></a>
  <a href="https://www.instagram.com/jean.cgnd/"><img class="logo-reseaux" src="../image/instagram1.png" alt="instagram"></a>

</div>


  </section>

  <footer>
    <p>Jean Coignard</p>
  <a href="../page3/expérience.php"><img id="suite" src="../image/fleche.png" alt="suite"></a>
   </footer>




</body>
</html>
