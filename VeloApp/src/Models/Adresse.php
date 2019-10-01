<?php
class Article
{
    private $idadresse;
    private $adresse1;
    private $adresse2;
    private $codePostal;
    private $ville_idville;

    function __construct($idadresse,$adresse1,$adresse2,$codePostal,$ville_idville)
    {
        $this->idadresse=$idadresse;
        $this->adresse1=$adresse1;
        $this->adresse2=$adresse2;
        $this->codePostal=$codePostal;
        $this->ville_idville=$ville_idville;
    }

    /**
     * Get the value of idadresse
     */ 
    public function getIdadresse()
    {
        return $this->idadresse;
    }

    /**
     * Set the value of idadresse
     *
     * @return  self
     */ 
    public function setIdadresse($idadresse)
    {
        $this->idadresse = $idadresse;

        return $this;
    }

    /**
     * Set the value of adresse1
     *
     * @return  self
     */ 
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get the value of adresse2
     */ 
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set the value of adresse2
     *
     * @return  self
     */ 
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get the value of codePostal
     */ 
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set the value of codePostal
     *
     * @return  self
     */ 
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get the value of ville_idville
     */ 
    public function getVille_idville()
    {
        return $this->ville_idville;
    }

    /**
     * Set the value of ville_idville
     *
     * @return  self
     */ 
    public function setVille_idville($ville_idville)
    {
        $this->ville_idville = $ville_idville;

        return $this;
    }
}