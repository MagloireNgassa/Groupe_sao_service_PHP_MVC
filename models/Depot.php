<?php
class Depot extends Model
{
    

    public function __construct()     //herite de model et utilise sa propriété public table pour designer la table de la base de donnée
    {
         
        $this->table = "depots";
        $this->getConnection();
    }

     

    public function insertDepots( $a, $b, $c, $d)
    {
        
        $sql = "INSERT INTO ".$this->table." (date_depot, libelle_depot, montant_depot, detail_depot) VALUES (:a, :b, :c, :d)";
        $query = $this->_connexion->prepare($sql);
        $query->bindValue(':a', $a);
        $query->bindValue(':b', $b);
        $query->bindValue(':c', $c);
        $query->bindValue(':d', $d);
        $query->execute();

        
    }
    
        public function allDepotsShow()                                                // function qui recupere tous les element de la base de donnée
    {
        $sql = "SELECT * FROM ".$this->table. " ORDER BY date_depot DESC";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    
    

}