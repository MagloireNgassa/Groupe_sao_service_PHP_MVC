<?php
class Article extends Model
{
    public function __construct()     //herite de model et utilise sa propriété public table pour designer la table de la base de donnée
    {
        $this->table = "commande_service";
        $this->getConnection();
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM ".$this->table. " WHERE Id_service='" .$id."';";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetch();
    }

    public function modifierById($id)
    {
        $sql = "SELECT * FROM ".$this->table. " WHERE Id_service='" .$id."';";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetch();
    }

    public function findByStatut( $id)
    {
        $sql = "SELECT * FROM ".$this->table. " WHERE statut='" .$id."' ORDER BY date, heure ASC;";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

}