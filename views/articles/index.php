<?php 
    session_start(); 
    $Accès_Autorisé=(isset($_SESSION['Accès_Autorisé'])) ? $_SESSION['Accès_Autorisé'] : ""; 
    //$Accès_Autorisé="ok";
    if ($Accès_Autorisé=="ok") 
    {
?>

<center ><h1 style="margin-top: 5%" ><B>Liste des clients <?php echo $id; ?></B></h1></center>
<?php foreach ($articles as $article): ?>
    <div> 
        <div class=" card"  style=" margin-left:5%; margin-top: 5%;margin-right:5%" >
            <div class="card-header"><h2 style="text-align: left;"><b>Nom client:</b> <i><?php echo $article['nom_client']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Téléphone:</b> <i><?php echo $article['telephone_client']; ?></i></h2></div> 
            <div class="card-footer"><h2 style="text-align: left;"><b>Service:</b> <i><?php echo $article['service']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Date:</b> <i><?php echo $article['date']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Heure:</b> <i><?php echo $article['heure']; ?> </i></h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Adresse depart:</b> <i><?php echo $article['adresse_depart']; ?></i> </h2></div>
            <div class="card-footer"><a href="<?php echo WEBROOT; ?>articles/detail/<?=$article['Id_service']; ?>"><h2>Detail</h2></a></div> 
                 
        </div >  
    </div>
<?php endforeach; 
    }
    else
    {
        http_response_code(404);
        echo "la page demandé n'existe pas";
    }
?>