<html>
    <?php
    include 'C:\Users\Sanchez\Documents\Iseg\ISCC-2020\ISCC-2020\Jour-01\ISCC-2020-J06\Ex_01\affichage.php';
    include 'C:\Users\Sanchez\Documents\Iseg\ISCC-2020\ISCC-2020\Jour-01\ISCC-2020-J06\Ex_01\gestion-produit.php';
    ?>
    <head>
        <title>Tests fonctions</title>
    </head>
    <body>
        <?php 
{
          $nom_produit = 't-shirt femme';
          echo $nom_produit;
          echo "<br>";
          $couleur ='rouge';
          echo $couleur ;
          echo "<br>";
          $prix = 15.50;
          echo $prix ;
          echo "<br>";
          $disponible = 'true';
          echo $disponible;
          echo "<br>";
          $quantité=10;
          echo $quantité;
          echo "<br>";

          echo "Le nom du produit est $nom_produit"; 
          echo "<br>";
          echo "La couleur du produit est $couleur";
}
        ?>
        </body>
        </html>