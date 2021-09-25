<?php
class Admin extends Model
{
    public function __construct()     //herite de model et utilise sa propriété public table pour designer la table de la base de donnée
    {
        $this->table = "admin";
        $this->getConnection();
    }

    public function lookFor($a,$b)
    {
        $sql = "SELECT nom FROM ".$this->table. " WHERE telephone ='" .$a."' and password='" .$b."';";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetch();
    }
}