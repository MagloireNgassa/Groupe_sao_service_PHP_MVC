<?php
class Clients extends Controller                   //cette classe herite de controller principal
{
    public function insert($a, $b, $c, $d, $e, $f, $g, $h, $i, $j)                         //elle utilise la fonction mere loadMoidel pour appeler le model article et l'instantier afin d'utiliser sa methode getAll()
    {
        $this->loadModel("Client");
        $this->Client->insertClient($a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
        //var_dump($articles);
        header('Location:'.WEBROOT.'articles/statut/programmer');
    }

    public function modif($id, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j)  
    {
        $this->loadModel("Client");
        $this->Client->modifClient($id, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
        //var_dump($articles);
        header('Location:'.WEBROOT.'articles/statut/programmer');
    }



    public function ajout()
    {
       
        $this->render('ajout');  //envoie a la vue ajout le resultat de la requete dans un tableau
        
    }

     
}