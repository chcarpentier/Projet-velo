<?php
require '../Models/Connect.php';
	use  \App\Models\Connect;
	$con = new Connect();
	
	 $req=$con::selectAll("SELECT * FROM article");
	 var_dump($req);
	 

