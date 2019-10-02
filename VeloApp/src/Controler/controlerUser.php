<?php
require '../Models/Users.php';
$user=new Users();
$sql="SELECT * FROM adresse";
$requete=$user->selectAllUser($sql);
var_dump($requete);