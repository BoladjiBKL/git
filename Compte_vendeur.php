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
<body>
<!-- barre de navigation -->
       <nav class="navbar navbar navbar-expand-lg navbar-lightgreen bg-lightgreen">

  <a class="navbar-brand" href="Accueil.html"><img src="eceamazon.png" height="60px"></a>

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
                <a class="dropdown-item" href="Livres.html" >Livres</a>
                <a class="dropdown-item" href="Vetements.html">Vétements</a>
                <a class="dropdown-item" href="Sport&Loisir.html">Sports et Loisir</a>
                <a class="dropdown-item" href="Musique.html">Musique</a>
               </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Ventes_Flash.html">Ventes Flash</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Co_vendeur.html">Vendre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Co_mon_compte.html">Mon Compte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Co_admin.html">Admin</a>
      </li>
     

      
    </ul>
  </div>
  
  <a class="nav-link" href="Panier.html"><img src="panier.png"></a>
</nav>

<br>

<br>
<div id="global">


  <h3> <em>Compte Vendeur</em></h3>
  <form action="GestionCompteVendeur.php" method="post">
    
    <table id="maTable">
  

      <tr>

        <td> Type d'article   <br><select name="Type" size="1">
              <option value="Livres"> Livres</option>

              <option value="Vetements"> Vetements </option>
              <option value="Sport et Loisir"> Sport et Loisir </option>
              <option value="Musique"> Musique </option>
              </select> <br><br>
              </td>
      </tr> 

      <tr>

        <td> Action à réaliser  <br><select name="Action" size="1">
              <option value="Ajouter"> Ajouter</option>

              <option value="Supprimer"> Supprimer</option>
            
              </select> <br><br>
              </td>
      </tr> 

            <tr colspan="2">
          <td> <input type="submit" name="Soumettre">
          </td>
        </tr>
    </table>
  </form>

    


<!--boutons d'ajjout et de supression de toutes les items -->

  <!-- Gerer les articles: <br/> <br/>
         <td colspan="1"><a href="formulaire_ajout_livre.php"><input type="button" value="Ajouter Livre"></a> <a href="formulaire_supprimer_livre.php"><input type="button" value="Supprimer Livre"></a> <br/> <br/>

        <td colspan="1"><a href="formulaire_ajouter_vetement.php"><input type="button" value="Ajouter Vetement"></a> <a href="formulaire_supprimer_vetement.php"><input type="button" value="Supprimer Vetement"></a> <br/> <br/>

        <td colspan="1"><a href="formulaire_ajouter_sportetloisir.php"><input type="button" value="Ajouter Sport et Loisir"></a> <a href="formulaire_supprimer_sportetloisir.php"><input type="button" value="Supprimer Sport et Loisir"></a> <br/> <br/>

        <td colspan="1"><a href="formulaire_ajout_musique.php"><input type="button" value="Ajouter Musique"></a> <a href="formulaire_supprimer_musique.php"><input type="button" value="Supprimer Musique"></a> <br/> <br/>
  -->

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