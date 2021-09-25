<?php 
    #authentification par la variable de session
    session_start(); 
    $Accès_Autorisé=(isset($_SESSION['Accès_Autorisé'])) ? $_SESSION['Accès_Autorisé'] : ""; 
    //$Accès_Autorisé="ok";
    if ($Accès_Autorisé=="ok") 
    { 
?>

<center ><h1 style="margin-top: 5%" ><B>Balances activités</B></h1></center><br/>

    <div> 
        <!--recuperation des entrer pour afficharge dans une card-->
        <div class=" card"  style=" margin-left:5%; margin-top: 5%;margin-right:5%" >
            <div class="card-header"><h2 style="text-align: left;"><b>Entrées du mois</b></h2></div>
            
            <?php foreach ($entrer as $article): ?>
                <div class="card-footer"><h2 style="text-align: left;"><b><?php echo $article['nom_client']; ?> - </b> <i><?php echo $article['date']; ?> - <?php echo $article['montant']; ?>$</i></h2></div> 
            <?php endforeach;?>
            
        </div > 
        
        <!--recuperation des sortis pour afficharge dans une card-->
        <div class=" card"  style=" margin-left:5%; margin-top: 5%;margin-right:5%" >
            <div class="card-header"><h2 style="text-align: left;"><b>Sortis du mois</b></h2></div>
            
            <?php foreach ($sortis as $article): ?>
                <div class="card-footer"><h2 style="text-align: left;"><b><?php echo $article['libelle']; ?> - </b> <i><?php echo $article['date_suivi']; ?> - <?php echo $article['montant_suivi']; ?>$</i></h2></div>
            <?php endforeach;?>
        </div >
        
        <!--recuperation des depots pour afficharge dans une card-->
        <div class=" card"  style=" margin-left:5%; margin-top: 5%;margin-right:5%" >
            <div class="card-header"><h2 style="text-align: left;"><b>Depots effectué dans le mois</b></h2></div>
            
            <?php foreach ($depots as $article): ?>
                <div class="card-footer"><h2 style="text-align: left;"><b><?php echo $article['libelle_depot']; ?> - </b> <i><?php echo $article['date_depot']; ?> - <?php echo $article['montant_depot']; ?>$</i></h2></div>
            <?php endforeach;?>
        </div >
        
        
        <?php
        $somme_entres = 0;
        $somme_sortis = 0;
        $somme_depots = 0;
        $balance = 0;
        
       # somme des entrer dans la variable $somme_entrer
        foreach ($entrer as $article):
            $somme_entres = $somme_entres + $article['montant'];
        endforeach;   
        
        # somme des sortis dans la variable $somme_sortis
         foreach ($sortis as $article):
            $somme_sortis = $somme_sortis + $article['montant_suivi'];
        endforeach; 
        
        # somme des sortis dans la variable $somme_sortis
        foreach ($depots as $article):
            $somme_depots = $somme_depots + $article['montant_depot'];
        endforeach;
        
        $balance = $somme_entres - $somme_sortis + $somme_depots;
        ?>
        
        <div class=" card"  style=" margin-left:5%; margin-top: 5%;margin-right:5%" >
            <div class="card-header"><h2 style="text-align: left;"><b>Total entres du mois: <?php echo $somme_entres ?>$</b></h2></div>
            <div class="card-header"><h2 style="text-align: left;"><b>Total sortis du mois: <?php echo $somme_sortis ?>$</b></h2></div>
            <div class="card-header"><h2 style="text-align: left;"><b>Balance de la caisse: <?php echo $balance ?>$</b></h2></div>
    </div>
<?php
    }
    else
    {
        http_response_code(404);
        echo "la page demandé n'existe pas";
    }
?>