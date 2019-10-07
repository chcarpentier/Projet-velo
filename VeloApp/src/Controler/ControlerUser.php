<?php
use src\Models\Connect;
use src\Models\Users;

class ControlerUser
{

    //pdoStatement est un objet résultant de l'utilisation des méthodes PDO::query et PDO::prepare
    
    private $pdoStatement;


    public function __construct()
    {

    }

    //insert un User dans la BDD
    public function create(Users &$user)
    {

    }

    //recupere un User a partir de son id
    public function read($id)
    {

    }
    //met a jour un user
    public function update(Users &$user)
    {

    }
    //supprime un user
    public function delete(Users &$User)
    {

    }


}