<?php 
    session_start(); 
    $Accès_Autorisé=(isset($_SESSION['Accès_Autorisé'])) ? $_SESSION['Accès_Autorisé'] : ""; 
    //$Accès_Autorisé="ok";
    if ($Accès_Autorisé=="ok") 
    {
?>  
<form method= post>
    <div> 
        <div class=" card"  style="width:90%; margin:auto;" >
            <div class="card-header"><h2 style="text-align: left;"><b>Ajoute une note</b> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Date:</b> <i><input type="date" name="date" value ="" > </i></h2></div> 
            <div class="card-footer"><h2 style="text-align: left;"><b>Notes:</b> <i><textarea  rows="5"  type="text" name="notes" value="" ></textarea> </h2></div>
            <div class="card-footer"><button><h2><input type="submit" name="ajout" value="AJOUTER"></h2></button></div>
        </div>  
    </div><br/>
</form>   

<?php
    }
    else
    {
        http_response_code(404);
        echo "la page demandé n'existe pas";
    }
if(isset($_POST["ajout"]))
{
    $date_notes = $_POST["date"];
    $notes = $_POST["notes"];
    
    $controller = 'Notes';
    $action =  'insert'; 
    require_once(ROOT.'controllers/'.$controller.'.php');
    $controller = new $controller();  
    $controller->$action($date_notes, $notes); 


}
?>
    