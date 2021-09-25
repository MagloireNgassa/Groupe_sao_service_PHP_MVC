<?php 
    session_start(); 
    $Accès_Autorisé=(isset($_SESSION['Accès_Autorisé'])) ? $_SESSION['Accès_Autorisé'] : ""; 
    //$Accès_Autorisé="ok";
    if ($Accès_Autorisé=="ok") 
    {
?>
    <div> 
        <div class=" card"  style="width:90%; margin:auto;" >
            <div class="card-header"><h2 style="text-align: left;"><b>Detail du client:</b> <i><?php echo $articles['nom_client']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Téléphone:</b> <i><?php echo $articles['telephone_client']; ?></i></h2></div> 
            <div class="card-footer"><h2 style="text-align: left;"><b>Service:</b> <i><?php echo $articles['service']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Date:</b> <i><?php echo $articles['date']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Heure:</b> <i><?php echo $articles['heure']; ?> </i></h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Adresse depart:</b> <i><?php echo $articles['adresse_depart']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Adresse arrivé:</b> <i><?php echo $articles['adresse_arrive']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Statut:</b> <i><?php echo $articles['statut']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Montant:</b> <i><?php echo $articles['montant']; ?>$</i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Description:</b> <i><?php echo $articles['detail']; ?></i> </h2></div>
            <div class="card-footer"><a href="<?php echo WEBROOT; ?>articles/modifier/<?=$articles['Id_service']; ?>"><h2>Modifier</h2></a></div>
        </div>  
        
    </div><br/>
    
    <?php
    }
    else
    {
        http_response_code(404);
        echo "la page demandé n'existe pas";
    }
    ?>
    

 
 