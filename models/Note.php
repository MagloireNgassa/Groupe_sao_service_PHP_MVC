<?php
class Note extends Model
{
    

    public function __construct()     //herite de model et utilise sa propriété public table pour designer la table de la base de donnée
    {
         
        $this->table = "notes";
        $this->getConnection();
    }

     

    public function insertNotes( $a, $b)
    {
        $sql = "INSERT INTO ".$this->table."(date_notes, notes) VALUES(:a, :b)";
        $query = $this->_connexion->prepare($sql);
        $query->bindValue(':a', $a);
        $query->bindValue(':b', $b);
        $query->execute();

        
    }
    
        public function allNotesShow()                                                // function qui recupere tous les element de la base de donnée
    {
        $sql = "SELECT * FROM ".$this->table. " ORDER BY date_notes DESC";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }


}