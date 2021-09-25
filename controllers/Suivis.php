<?php
class Suivis extends Controller                   //cette classe herite de controller principal
{
    //insertion des données de depense dans la bd
    public function insert($a, $b, $c, $d) 
    {
 
        $this->loadModel("Suivi");
        $this->Suivi->insertSuivis($a, $b, $c, $d);
        header('Location:'.WEBROOT.'suivis/allsuivis');
    }
    
      public function allsuivis()  
    {
        $this->loadModel("Suivi");
        $articles = $this->Suivi->allSuivisShow();
        $this->render('allsuivis', compact('articles'));
        
    }
    
     public function balance()  
    {
        $this->loadModel("Suivi");
        $entrer = $this->Suivi->balanceCom();
        $sortis = $this->Suivi->balanceSer();
        $depots = $this->Suivi->balanceDep();
        $this->rendertwo('balance', compact('sortis'), compact('entrer'), compact('depots'));
    
    }
    
       
    public function ajout() //fonction fait imediatement appelle a la vue correspondant
    {
       
        $this->render('ajout_suivis');  //envoie a la vue ajout le resultat de la requete dans un tableau
        
    } 
     
}