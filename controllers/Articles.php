<?php
class Articles extends Controller                   //cette classe herite de controller principal
{
    public function index()                         //elle utilise la fonction mere loadMoidel pour appeler le model article et l'instantier afin d'utiliser sa methode getAll()
    {
        $this->loadModel("Article");
        $articles = $this->Article->getAll();
        $id='';
        //var_dump($articles);
        $this->render('index', compact('articles','id'));  //on recupere en parametre l'index pour la vue et la variable en tableau qui va etre utiliser dans la vue
    }

    public function detail($id)
    {
        $this->loadModel("Article");
        $articles = $this->Article->findById($id);
        //var_dump($articles);
        $this->render('detail', compact('articles'));  //envoie a la vue detail le resultat de la requete dans un tableau
        
    }

    public function modifier($id)
    {
        $this->loadModel("Article");
        $articles = $this->Article->modifierById($id);
        //var_dump($articles);
        $this->render('modifier', compact('articles'));  //envoie a la vue detail le resultat de la requete dans un tableau
        
    }

    public function statut($id)
    {
        $this->loadModel("Article");
        $articles = $this->Article->findByStatut($id);
        //var_dump($articles);
        $this->render('index', compact('articles','id'));  //envoie a la vue index le resultat de la requete dans un tableau
        
    }

   
}