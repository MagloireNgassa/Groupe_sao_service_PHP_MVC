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
            <div class="card-header"><h2 style="text-align: left;"><b>Ajout d'un client</b> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Nom:</b> <i><input type="text" name="nom_client" value="" > </i></h2></div> 
            <div class="card-footer"><h2 style="text-align: left;"><b>Téléphone:</b><i><input type="text" name="telephone_client" value="" ></i></h2></div> 
            <div class="card-footer"><h2 style="text-align: left;"><b>Service:</b> <i><select name="service"><option>Déménagement</option>
                                                                                                             <option>Livraison</option></select></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Date:</b> <i><input type="date" name="date" value="" ></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Heure:</b> <i><input type="time" name="heure" value="" > </i></h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Adresse depart:</b> <i><input type="text" name="adresse_depart" value="" ></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Adresse arrivé:</b> <i><input type="text" name="adresse_arrive" value="" ></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Statut:</b> <i><select name="statut"><option>programmer</option></select></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Montant:</b> <i><input type="munber" name="montant" value="" ></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Description:</b> <i><textarea  rows="5"  type="text" name="detail" value="" ></textarea> </h2></div>
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
    $nom = $_POST["nom_client"];
    $telephone = $_POST["telephone_client"];
    $service = $_POST["service"];
    $date = $_POST["date"];
    $heure = $_POST["heure"];
    $adres_dep = $_POST["adresse_depart"];
    $adres_arr = $_POST["adresse_arrive"];
    $statut = $_POST["statut"];
    $montant = $_POST["montant"];
    $detail = $_POST["detail"];

    $controller = 'Clients';
    $action =  'insert'; 
    require_once(ROOT.'controllers/'.$controller.'.php');
    $controller = new $controller();  
    $controller->$action($nom, $telephone, $service, $date, $heure, $adres_dep, $adres_arr, $statut, $detail, $montant); 


}
?>
    