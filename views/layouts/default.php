<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../public/styles/styles.css" />
    <title>SAO & MAG SERVICES</title>
</head>
<body>
<?php 

	$Accès_Autorisé=(isset($_SESSION['Accès_Autorisé'])) ? $_SESSION['Accès_Autorisé'] : ""; 
	//$Accès_Autorisé="ok";
  if ($Accès_Autorisé=="ok") 
  {
?>
    <header style="margin-top:10px; width:95%; margin:auto;" > 
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      </button>
      <a href="/" class="navbar-brand"><h3>SAO & MAG </br>Déménagement et livraison</h3></a>
      <div class=" collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="navbar-item">
            <a href="<?php echo WEBROOT; ?>articles" class="nav-link"><h4>Liste des clients</h4></a>
          </li>
          <li class="navbar-item">
            <a href="<?php echo WEBROOT; ?>clients/ajout" class="nav-link"><h4>Ajout un client</h4></a>
          </li>
          <li class="navbar-item">
            <a href="<?php echo WEBROOT; ?>articles/statut/programmer" class="nav-link"><h4>Clients programmés</h4></a>
          </li>
          <li class="navbar-item">
            <a href="<?php echo WEBROOT; ?>articles/statut/terminer" class="nav-link"><h4>Services terminés</h4></a>
          </li>
          <li class="navbar-item">
            <a href="<?php echo WEBROOT; ?>articles/statut/annuler"class="nav-link"><h4>Services annulés</h4></a>
          </li>
           <li class="navbar-item">
            <a href="<?php echo WEBROOT; ?>suivis/allsuivis"class="nav-link"><h4>Dépenses activités</h4></a>
          </li>
          <li class="navbar-item">
            <a href="<?php echo WEBROOT; ?>depots/alldepots"class="nav-link"><h4>Effectuer un dépot </h4></a>
          </li>
           <li class="navbar-item">
            <a href="<?php echo WEBROOT; ?>notes/allnotes"class="nav-link"><h4>Notes</h4></a>
          </li>
          <li class="navbar-item">
            <a href="<?php echo WEBROOT; ?>admins/deconnexion"class="nav-link"><h4>Déconnexion</h4></a>
          </li>
          
          
        </ul>
      </div>
    </nav>
  </header>
<?php
  }
?>

    <main>
        <?= $content ?>
    </main>
    <footer>
         
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../public/js/script.js"></script>
</body>
</html>