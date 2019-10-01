<?php
class CarteBleue
{
    private $idcartebleue;
    

    private $numero_cb;


    private $nom_titulaire;
    

    private $date_validite;


    private $users_idusers;

    public function __construct($idcartebleue, $numero_cb, $nom_titulaire, $date_validite, $users_idusers)
    {
        $this->idcartebleue = $idcartebleue;
        $this->numero_cb = $numero_cb;
        $this->nom_titulaire = $nom_titulaire;
        $this->date_validite = $date_validite;
        $this->users_idusers = $users_idusers;
    }



    /**
     * Get the value of idcartebleue
     */ 
    public function getIdcartebleue()
    {
        return $this->idcartebleue;
    }

    /**
     * Set the value of idcartebleue
     *
     * @return  self
     */ 
    public function setIdcartebleue($idcartebleue)
    {
        $this->idcartebleue = $idcartebleue;

        return $this;
    }

    /**
     * Get the value of numero_cb
     */ 
    public function getNumero_cb()
    {
        return $this->numero_cb;
    }

    /**
     * Set the value of numero_cb
     *
     * @return  self
     */ 
    public function setNumero_cb($numero_cb)
    {
        $this->numero_cb = $numero_cb;

        return $this;
    }

    /**
     * Get the value of nom_titulaire
     */ 
    public function getNom_titulaire()
    {
        return $this->nom_titulaire;
    }

    /**
     * Set the value of nom_titulaire
     *
     * @return  self
     */ 
    public function setNom_titulaire($nom_titulaire)
    {
        $this->nom_titulaire = $nom_titulaire;

        return $this;
    }

    /**
     * Get the value of date_validite
     */ 
    public function getDate_validite()
    {
        return $this->date_validite;
    }

    /**
     * Set the value of date_validite
     *
     * @return  self
     */ 
    public function setDate_validite($date_validite)
    {
        $this->date_validite = $date_validite;

        return $this;
    }

    /**
     * Get the value of users_idusers
     */ 
    public function getUsers_idusers()
    {
        return $this->users_idusers;
    }

    /**
     * Set the value of users_idusers
     *
     * @return  self
     */ 
    public function setUsers_idusers($users_idusers)
    {
        $this->users_idusers = $users_idusers;

        return $this;
    }
}