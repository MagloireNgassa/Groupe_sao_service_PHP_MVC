<?php
class Client extends Model
{
    

    public function __construct()     //herite de model et utilise sa propriété public table pour designer la table de la base de donnée
    {
         
        $this->table = "commande_service";
        $this->getConnection();
    }

     

    public function insertClient( $a, $b, $c, $d, $e, $f, $g, $h, $i, $j)
    {
        $sql = "INSERT INTO ".$this->table."(nom_client, telephone_client, service, date, heure, Adresse_depart, Adresse_arrive, statut, detail, montant)
                                        VALUES(:a, :b, :c, :d, :e, :f, :g, :h, :i, :j)";
        $query = $this->_connexion->prepare($sql);
        $query->bindValue(':a', $a);
        $query->bindValue(':b', $b);
        $query->bindValue(':c', $c);
        $query->bindValue(':d', $d);
        $query->bindValue(':e', $e);
        $query->bindValue(':f', $f);
        $query->bindValue(':g', $g);
        $query->bindValue(':h', $h);
        $query->bindValue(':i', $i);
        $query->bindValue(':j', $j);
        
        $query->execute();

        
    }

    public function modifClient( $id, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j)
    {
        $sql = "UPDATE ".$this->table." SET nom_client=?, telephone_client=?, service=?, date=?, heure=?, Adresse_depart=?,
                                        Adresse_arrive=?, statut=?, detail=?, montant=? WHERE Id_service = ?";
                                        
        $query = $this->_connexion->prepare($sql);
        
        $query->execute([$a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $id]);
        echo $id;
        echo $a;

        
    }

}