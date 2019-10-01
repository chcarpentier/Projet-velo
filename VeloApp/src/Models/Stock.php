<?php
class Stock
{
    private $idstock;


    private $quantite_stock;


    private $ville_idville;


    private $article_idarticle;

    public function __construct($idstock, $quantite_stock, $ville_idville, $article_idarticle)
    {
        $this->idstock = $idstock;
        $this->quantite_stock = $quantite_stock;
        $this->ville_idville = $ville_idville;
        $this->article_idarticle = $article_idarticle;
    }



    /**
     * Get the value of idstock
     */ 
    public function getIdstock()
    {
        return $this->idstock;
    }

    /**
     * Set the value of idstock
     *
     * @return  self
     */ 
    public function setIdstock($idstock)
    {
        $this->idstock = $idstock;

        return $this;
    }

    /**
     * Get the value of quantite_stock
     */ 
    public function getQuantite_stock()
    {
        return $this->quantite_stock;
    }

    /**
     * Set the value of quantite_stock
     *
     * @return  self
     */ 
    public function setQuantite_stock($quantite_stock)
    {
        $this->quantite_stock = $quantite_stock;

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

    /**
     * Get the value of article_idarticle
     */ 
    public function getArticle_idarticle()
    {
        return $this->article_idarticle;
    }

    /**
     * Set the value of article_idarticle
     *
     * @return  self
     */ 
    public function setArticle_idarticle($article_idarticle)
    {
        $this->article_idarticle = $article_idarticle;

        return $this;
    }
}