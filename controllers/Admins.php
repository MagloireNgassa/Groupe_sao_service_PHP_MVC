<?php
class Admins extends Controller                   //cette classe herite de controller principal
{

    public function login($a,$b)                         //elle utilise la fonction mere loadMoidel pour appeler le model article et l'instantier afin d'utiliser sa methode getAll()
    {
        
        $this->loadModel("Admin");
        $valeur = $this->Admin->lookFor($a,$b);
        session_start();
        if ($valeur != "")
        {
            $_SESSION['Accès_Autorisé']='ok';
            $_SESSION['erreur'] = 0;
            header('Location:'.WEBROOT.'articles/statut/programmer');  
        }
        else
        {
            $_SESSION['erreur'] = 1;
            header('Location:'.WEBROOT.'index.php');
              
        } 
           
    }

    public function connexion()
    {
        $this->render('connexion');  //envoie a la vue ajout le resultat de la requete dans un tableau
    }

    public function deconnexion()
    {
        session_start();
        unset($_SESSION);
        unset($_COOKIE);
        session_destroy();
        header('Location:'.WEBROOT.'index.php');
        
    }
}