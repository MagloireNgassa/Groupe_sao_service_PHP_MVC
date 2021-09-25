<?php
abstract class Model
{
    private $host = "localhost";
    private $db_name = "id17061002_groupe_sao_db";
    private $username = "id17061002_saomagservices";
    private $password = "Tchuik}*2021Avec4";

    //propriete contenant la connexion
    protected $_connexion;

    //propriété contenant les information de requette
    public $table;
    public $id;


    public function getConnection()
    {
        //$this->_connexion = null;
        try 
        {
            $this->_connexion = new PDO('mysql:host='.$this->host.'; dbname='.$this->db_name, $this->username, $this->password);
            //$this->_connexion->exec('set names utf8');
        }
        catch(PDOException $ex)
        {
            echo "ERREUR : ".$ex->getMessage();
        }
    }

    public function getAll()                                                // function qui recupere tous les element de la base de donnée
    {
        $sql = "SELECT * FROM ".$this->table. " ORDER BY date, heure ASC";
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getOne()                                                // function qui recupere un seul element de la base de donnée
    {
        $sql = "SELECT * FROM ".$this->table. " WHERE id=" .$this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();

        return $query->fetch();
    }


}