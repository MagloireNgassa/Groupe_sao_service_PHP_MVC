<?php
class Depots extends Controller                   //cette classe herite de controller principal
{
    //insertion des données de depense dans la bd
    public function insert($a, $b, $c, $d) 
    {
 
        $this->loadModel("Depot");
        $this->Depot->insertDepots($a, $b, $c, $d);
        header('Location:'.WEBROOT.'depots/alldepots');
    }
    
      public function alldepots()  
    {
        $this->loadModel("Depot");
        $articles = $this->Depot->allDepotsShow();
        //var_dump($articles);
        $this->render('alldepots', compact('articles'));
        
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
       
        $this->render('ajout_depots');  //envoie a la vue ajout le resultat de la requete dans un tableau
        
    } 
     
}