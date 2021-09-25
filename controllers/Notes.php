<?php
class Notes extends Controller                   //cette classe herite de controller principal
{
    public function insert($a, $b) 
    {
        $this->loadModel("Note");
        $this->Note->insertNotes($a, $b);
        //var_dump($articles);
        header('Location:'.WEBROOT.'notes/allnotes');
    }

    public function allnotes()  
    {
        $this->loadModel("Note");
        $articles = $this->Note->allNotesShow();
        $this->render('allnotes', compact('articles'));
        
    }



    public function ajout()
    {
       
        $this->render('ajout_notes');  //envoie a la vue ajout le resultat de la requete dans un tableau
        
    }

     
}