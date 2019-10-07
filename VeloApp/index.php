<?php
    require 'src/HTML/nav.php';
    require 'vendor/autoload.php';
    $router = new AltoRouter();
    $router->setBasePath('/VeloApp');
  
    $router->map('GET|POST','/home', 'home', 'home');
    $router->map('GET|POST','/connexion', "connexion","connexion");
 
    $router->map('GET|POST','/inscription', "inscription","inscription");
  
    $router->map('GET|POST','/velos', "velos","velos");

    
    // match current request
    $match = $router->match();
 
    if($match["target"] === "home")
    {
      require 'src/HTML/home.php';
    }
    elseif($match["target"] === "connexion")
    {
      require 'src/HTML/connexion.php';
    }
    elseif($match["target"] === "velos")
    {
      require 'src/HTML/velos.php';
    }
    elseif($match["target"] === "inscription")
    {
      require 'src/HTML/inscription.php';
    }

    ?>
    