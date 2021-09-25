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
            <div class="card-header"><h2 style="text-align: left;"><b>Modification info client</b> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Nom:</b> <i><input type="text" name="nom_client" value="<?php echo $articles['nom_client']; ?>" > </i></h2></div> 
            <div class="card-footer"><h2 style="text-align: left;"><b>Téléphone:</b> <i><input type="text" name="telephone_client" value="<?php echo $articles['telephone_client']; ?>" ></i></h2></div> 
            <div class="card-footer"><h2 style="text-align: left;"><b>Service:</b> <i><select name="service"><option><?php echo $articles['service']; ?></option>
                                                                                                            <option>Déménagement</option>
                                                                                                             <option>Livraison</option></select></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Date:</b> <i><input type="date" name="date" value="<?php echo $articles['date']; ?>" ></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Heure:</b> <i><input type="time" name="heure" value="<?php echo $articles['heure']; ?>" > </i></h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Adresse depart:</b> <i><input type="text" name="adresse_depart" value="<?php echo $articles['adresse_depart']; ?>" ></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Adresse arrivé:</b> <i><input type="text" name="adresse_arrive" value="<?php echo $articles['adresse_arrive']; ?>" ></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Statut:</b> <i><select name="statut"><option><?php echo $articles['statut']; ?></option>
                                                                                             <option>programmer</option>
                                                                                             <option>terminer</option>
                                                                                             <option>annuler</option></select></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Montant:</b> <i><input type="munber" name="montant" value="<?php echo $articles['montant']; ?>" ></i> </h2></div>
            <div class="card-footer"><h2 style="text-align: left;"><b>Description:</b> <i><textarea  rows="5"  type="text" name="detail" value="" ><?php echo $articles['detail']; ?></textarea> </h2></div>
            <input type="hidden" name="Id" value="<?=$articles['Id_service']; ?>"/>
            <div class="card-footer"><h2><input type="submit" name="ajout" value="Modifier"></h2></div>
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
    $id = $_POST["Id"];

    $controller = 'Clients';
    $action =  'modif'; 
    require_once(ROOT.'controllers/'.$controller.'.php');
    $controller = new $controller();  
    $controller->$action($id, $nom, $telephone, $service, $date, $heure, $adres_dep, $adres_arr, $statut, $detail, $montant); 

}
?>