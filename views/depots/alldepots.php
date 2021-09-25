<?php 
    session_start(); 
    $Accès_Autorisé=(isset($_SESSION['Accès_Autorisé'])) ? $_SESSION['Accès_Autorisé'] : ""; 
    //$Accès_Autorisé="ok";
    if ($Accès_Autorisé=="ok") 
    {
?>

<center ><h1 style="margin-top: 5%" ><B>Depots déjà effectués </B></h1></center><br/>

<a href="<?php echo WEBROOT; ?>depots/ajout"><h2>Faire un dêpot en caise</h2></a><br/>
<a href="<?php echo WEBROOT; ?>suivis/balance"><h2>Balance activitée</h2></a><br/>


<?php foreach ($articles as $article): ?>
    <div> 
        <div class=" card"  style=" margin-left:5%; margin-top: 5%;margin-right:5%" >
            <div class="card-header"><h2 style="text-align: left;"><b>Date du suivi:</b> <i><?php echo $article['date_depot']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Libéllé suivi:</b> <i><?php echo $article['libelle_depot']; ?></i></h2></div> 
            <div class="card-header"><h2 style="text-align: left;"><b>Dépense éffectué:</b> <i><?php echo $article['montant_depot']; ?>$</i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Détail dépense:</b> <i><?php echo $article['detail_depot']; ?></i></h2></div>
             
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