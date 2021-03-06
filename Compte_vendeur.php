<!DOCTYPE html>
<html>
<head>
  <title>Compte vendeur</title>


  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="tous.css">
</head>



<?php

  session_start();
  $_SESSION["mailvendeur"];





  $bdd = new PDO('mysql:host=localhost;dbname=ECEAmazon;charset=utf8', 'root', 'root');

  $reponse = $bdd->query('SELECT * FROM vendeur WHERE mailvend ="'.$_SESSION["mailvendeur"].'" ');

  $donnees = $reponse->fetch();

?>



<body background="<?php echo $donnees['urlfond']; ?>" >


<!-- barre de navigation -->
       <nav class="navbar navbar navbar-expand-lg navbar-lightgreen bg-lightgreen ">

  <a class="navbar-brand" href="Accueil.php"><img src="eceamazon1.png" height="60px"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">


        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catégories
          </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="Livres.php" >Livres</a>
                <a class="dropdown-item" href="Vetements.php">Vêtements</a>
                <a class="dropdown-item" href="Sport&Loisir.php">Sports et Loisir</a>
                <a class="dropdown-item" href="Musique.php">Musique</a>
               </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Ventes_Flash.php">Ventes Flash</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Co_vendeur.php">Vendre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Co_mon_compte.php">Mon Compte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Co_admin.php">Admin</a>
      </li>



    </ul>
  </div>

  <a class="nav-link" href="Panier.php"><img src="panier.png"></a>
</nav>

<br>

<br>

<div id="global">

  <h3> <em>Compte Vendeur</em></h3>
  <br>

  <div class="profil_vendeur rounded border border-dark">

    <img class="photo_profil rounded-circle " src="<?php echo $donnees['urlprofil']; ?>"> <br>
    <?php echo $donnees['nom']; ?>


  </div>




  <form action="GestionCompteVendeur.php" method="post">

    <table id="maTable">

      <tr>

        <td> Type d'article <br>  <br><select name="Type" size="1" class="form-control">
          <br>
              <option value="Livres"> Livres</option>

              <option value="Vetements"> Vetements </option>
              <option value="Sport et Loisir"> Sport et Loisir </option>
              <option value="Musique"> Musique </option>
              </select> <br><br>
              </td>

      </tr>

      <tr>

        <td> Action à réaliser  <br><br><select name="Action" size="1" class="form-control">
              <option value="Ajouter"> Ajouter</option>

              <option value="Supprimer"> Supprimer</option>

              </select>
              </td>

      </tr>

            <tr colspan="2">
          <td> <br><input type="submit" name="Soumettre" class="btn btn-secondary">
          </td>
        </tr>


      <tr>
        </table>
          </form>


          <br><br><br>

          <div class="modif_img_vendeur">
          <!--formulaire modification image profil -->

          <form action="modifier_photo_profil.php" method="post">
            <table>
              <tr>
        <td>Lien d'image photo de profil  : </td>
        <td><input type="text" name="urlprofil" class="form-control"></td>
             </tr>



          <td> <input type="submit" name="Ajouterprofil" value="Ajouter photo profil" class="btn btn-secondary">
          </td>
          </table>
          </form>

          <br><br>

          <!--formulaire modification background -->

          <form action="modifier_photo_fond.php" method="post">
            <table>
              <tr>
        <td>Lien d'image photo de fond  :</td>
        <td><input type="text" name="urlfond" class="form-control"></td>
             </tr>

          <td> <input type="submit" name="Ajouterfond" value="Ajouter photo fond" class="btn btn-secondary">
          </td>
          </table>
          </form>

          </div>

          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>
          <br><br><br>









</div>

 <footer class="footer">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="Accueil.html"> ECE-Amazon.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
