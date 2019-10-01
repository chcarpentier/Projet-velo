<?php 
    
    class Connect
    {

        public function __construct(){}
           
        

        public function connect($db,$login,$password)
        {
                
                        try
                        {
                            $database = new PDO("mysql:host=localhost;dbname=$db;charset=utf8","$login","$password");
                            
                            return $database;
                            
                        }
                        catch(Exception $e)
                        {
                            die('Erreur:'.$e->getMessage());
                        }
                        
        }
      
    } 