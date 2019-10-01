<?php
require '';
class Article 
{
    private $idarticle;

    

    private $nom_article;

    private $description;

    private $lien_photo;

    private $actif;

    public function __construct(int $idarticle,string $nom_article,string $description,string $lien_photo,int $actif)
    {
        $this->idarticle = $idarticle;        
        $this->nom_article = $nom_article;
        $this->description = $description;
        $this->lien_photo = $lien_photo;
        $this->actif = $actif;
    }

    public function getAllArticle($sql)
    {
       $connect=Connect::connect('veloc','root','');
       $req=$connect->prepare($sql);
       $req->execute();
       $response=$connect->fetchObject();
       return $response;
    }
    public function getArticleById($sql,$id)
    {
        $connect=Connect::connect('veloc','root','');
        $req=$connect->prepare($sql);
        $req->bindPARAM(":id",$id,PDO::PARAM_INT);
        $req->execute();
        $response=$connect->fetchObject();
        return $response; 
    }
     

    /*static public function selectSQL($sql)
    {
        $con=self::getConnection();
        $results=array();

        $request=$con->prepare($sql);
        $request->bindParam(':idaricle', $idarticle, PDO::PARAM_INT);
        $request->execute();

        while ($row=$request->fetch(PDO::FETCH_OBJ) != null)
        {
            array_push($results, $row);
        }

        if(count($results)>0)
        {
            return $results;
        }
    }*/


    /**
     * Get the value of idarticle
     */ 
    public function getIdarticle()
    {
        return $this->idarticle;
    }

    /**
     * Set the value of idarticle
     *
     * @return  self
     */ 
    public function setIdarticle($idarticle)
    {
        $this->idarticle = $idarticle;

        return $this;
    }

    /**
     * Get the value of nom_article
     */ 
    public function getNom_article()
    {
        return $this->nom_article;
    }

    /**
     * Set the value of nom_article
     *
     * @return  self
     */ 
    public function setNom_article($nom_article)
    {
        $this->nom_article = $nom_article;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of lien_photo
     */ 
    public function getLien_photo()
    {
        return $this->lien_photo;
    }

    /**
     * Set the value of lien_photo
     *
     * @return  self
     */ 
    public function setLien_photo($lien_photo)
    {
        $this->lien_photo = $lien_photo;

        return $this;
    }

    /**
     * Get the value of actif
     */ 
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set the value of actif
     *
     * @return  self
     */ 
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }
}