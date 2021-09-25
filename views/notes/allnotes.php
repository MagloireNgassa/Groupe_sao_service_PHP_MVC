<?php 
    session_start(); 
    $Accès_Autorisé=(isset($_SESSION['Accès_Autorisé'])) ? $_SESSION['Accès_Autorisé'] : ""; 
    //$Accès_Autorisé="ok";
    if ($Accès_Autorisé=="ok") 
    {
?>

<center ><h1 style="margin-top: 5%" ><B>NOTES</B></h1></center><br/>

<a href="<?php echo WEBROOT; ?>notes/ajout"><h2>Ajouter une note</h2></a><br/>

<?php foreach ($articles as $article): ?>
    <div> 
        <div class=" card"  style=" margin-left:5%; margin-top: 5%;margin-right:5%" >
            <div class="card-header"><h2 style="text-align: left;"><b>Date note:</b> <i><?php echo $article['date_notes']; ?></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Notes:</b> <i><?php echo $article['notes']; ?></i></h2></div> 
             
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