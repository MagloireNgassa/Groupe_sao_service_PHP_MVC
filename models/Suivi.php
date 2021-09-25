<?php
class Suivi extends Model
{
    

    public function __construct()     //herite de model et utilise sa propriété public table pour designer la table de la base de donnée
    {
         
        $this->table = "suivi_activites";
        $this->getConnection();
    }

     

    public function insertSuivis( $a, $b, $c, $d)
    {
        
        $sql = "INSERT INTO ".$this->table."(date_suivi, libelle, montant_suivi, detail) VALUES(:a, :b, :c, :d)";
        $query = $this->_connexion->prepare($sql);
        $query->bindValue(':a', $a);
        $query->bindValue(':b', $b);
        $query->bindValue(':c', $c);
        $query->bindValue(':d', $d);
        $query->execute();

        
    }
    
        public function allSuivisShow()                                                // function qui recupere tous les element de la base de donnée
    {
        $sql = "SELECT * FROM ".$this->table. " ORDER BY date_suivi DESC";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    
            public function balanceCom()                                                // function qui recupere tous les element de la base de donnée
    {
        $sql = "SELECT c.nom_client, c.date, c.montant   FROM commande_service as c WHERE c.statut = 'terminer'";
        $query = $this->_connexion->prepare($sql); 
        $query->execute();
        
        return $query->fetchAll();
    }
    
              public function balanceSer()                                                // function qui recupere tous les element de la base de donnée
    {
        $sql = "SELECT s.date_suivi, s.libelle, s.montant_suivi   FROM suivi_activites as s";
        $query = $this->_connexion->prepare($sql); 
        $query->execute();
        
        return $query->fetchAll();
    }
    
               public function balanceDep()                                                // function qui recupere tous les element de la base de donnée
    {
        $sql = "SELECT d.date_depot, d.libelle_depot, d.montant_depot   FROM depots as d";
        $query = $this->_connexion->prepare($sql); 
        $query->execute();
        
        return $query->fetchAll();
    }


}