<?php
require 'Connect.php';
class Users
{
    /*private $idusers;


    private $nom_user;

    private $prenom_user;


    private $date_naissance_user;


    private $tel_user;


    private $email_user;


    private $datecreation_user;

    public function __construct($idusers, $nom_user, $prenom_user, $date_naissance_user, $tel_user, $email_user, $datecreation_user)
    
    {
        $this->idusers = $idusers;
        $this->nom_user = $nom_user;
        $this->prenom_user = $prenom_user;
        
        $this->date_naissance_user = $date_naissance_user;
        $this->tel_user = $tel_user;
        $this->email_user = $email_user;
        $this->datecreation_user = $datecreation_user;
    }

    //public function __construct($idusers, $nom_user, $prenom_user, $date_naissance_user, $tel_user, $email_user, $datecreation_user);
    */

    public function __construct(){}


    public function selectAllUser($sql)
    {
        $connection=new Connect();
        $connect=$connection->connect('veloloc', 'root', '');
        
        $req = $connect->prepare($sql);
        $req->execute();
        $response = $connect->fetchObject();
        return $response;
    }

    public function selectUserById($sql, $idusers)
    {
        $connect = Connect::connect('veloc', 'root', '');
        $req = $connect->prepare($sql);
        $req->bindPARAM(":id", $idusers, PDO::PARAM_INT);
        $req->execute();
        $response = $connect->fetchObject();
        return $response;
    }

   /* public function addUser()
    {       
        $connect = Connect::connect('veloc', 'root', '');
        if (
            isset($_POST["email"]) && isset($_POST["inputPassword"]) && isset($_POST["inputName"]) && isset($_POST["inputPrenom"]) && isset($_POST["inputAnniv"]) &&
            isset($_POST["inputTel"]) && isset($_POST["inputAdresse"]) && isset($_POST["inputAdresse2"]) && isset($_POST["inputAdresse2"]) && isset($_POST["inputAdresse2"])
        ) {
            $prenom_user = $_POST["inputPrenom"];
            $nom_user = $_POST["inputName"];
            $email_user = $_POST["email"];
            $password = $_POST["inputPassword"];
            $adresse1 = $_POST["adresse1"];
            $adresse2 = $_POST["adresse2"];
            $ville = $_POST["ville"];
            $CP = $_POST["CP"];
        } else {
            $prenom = null;
            $nom = null;
            $email = null;
            $password = null;
            $adresse1 = null;
            $adresse2 = null;
            $ville = null;
            $CP = null;
        }
    }*/



    /**
     * Get the value of idusers
     */
    public function getIdusers()
    {
        return $this->idusers;
    }

    /**
     * Set the value of idusers
     *
     * @return  self
     */
    public function setIdusers($idusers)
    {
        $this->idusers = $idusers;

        return $this;
    }

    /**
     * Get the value of nom_user
     */
    public function getNom_user()
    {
        return $this->nom_user;
    }

    /**
     * Set the value of nom_user
     *
     * @return  self
     */
    public function setNom_user($nom_user)
    {
        $this->nom_user = $nom_user;

        return $this;
    }

    /**
     * Get the value of prenom_user
     */
    public function getPrenom_user()
    {
        return $this->prenom_user;
    }

    /**
     * Set the value of prenom_user
     *
     * @return  self
     */
    public function setPrenom_user($prenom_user)
    {
        $this->prenom_user = $prenom_user;

        return $this;
    }

    /**
     * Get the value of date_naissance_user
     */
    public function getDate_naissance_user()
    {
        return $this->date_naissance_user;
    }

    /**
     * Set the value of date_naissance_user
     *
     * @return  self
     */
    public function setDate_naissance_user($date_naissance_user)
    {
        $this->date_naissance_user = $date_naissance_user;

        return $this;
    }

    /**
     * Get the value of tel_user
     */
    public function getTel_user()
    {
        return $this->tel_user;
    }

    /**
     * Set the value of tel_user
     *
     * @return  self
     */
    public function setTel_user($tel_user)
    {
        $this->tel_user = $tel_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     *
     * @return  self
     */
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of datecreation_user
     */
    public function getDatecreation_user()
    {
        return $this->datecreation_user;
    }

    /**
     * Set the value of datecreation_user
     *
     * @return  self
     */
    public function setDatecreation_user($datecreation_user)
    {
        $this->datecreation_user = $datecreation_user;

        return $this;
    }
}
