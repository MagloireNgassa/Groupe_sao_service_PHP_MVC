<?php
    session_start(); 
?>
<form method= post>
    <div> 
        <div class=" card"  style="width:90%; margin:auto;" >
            <div class="card-header"><h2 style="text-align: left;"><b>SAO & MAG <br/>ADMINISTRATION LOGIN</b> </h2></div>
            <!-- <div class="card-footer"><h2 style="text-align: left;"><b>Nom:</b> <i><input type="text" name="nom" value="" > </i></h2></div>  -->
            <div class="card-footer"><h2 style="text-align: left;"><b>Téléphone:</b> <i><input type="text" name="telephone" value="" ></i></h2></div> 
            <div class="card-footer"><h2 style="text-align: left;"><b>Password:</b> <i><input type="password" name="password" value="" ></i> </h2></div>
             
            <div class="card-footer"><input type="submit" name="login" value="CONNEXION"></div>
            <?php
            $err = (isset( $_SESSION['erreur'])) ?  $_SESSION['erreur'] :"" ;
            if($err == 1)
            { 
                ?><h2><b>Login ou mot de passe incorrect</b></h2><?php
            }
            
            ?>
        </div>  
    </div><br/>
</form>   

<?php
if(isset($_POST["login"]))
{
    /* $nom = $_POST["nom"]; */
    $telephone = $_POST["telephone"];
    $password = $_POST["password"];
    

    $controller = 'Admins';
    $action =  'login'; 
    require_once(ROOT.'controllers/'.$controller.'.php');
    $controller = new $controller();  
    $controller->$action($telephone, $password); 
     


}
    