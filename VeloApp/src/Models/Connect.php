<?php
	namespace App\Models;
	require '../config.php';
	use PDO;
	use Exception;
	class Connect
	{
		static public function connect()
		{

			try
			{
				$database = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8",DBLOGIN,DBPASS);

				return $database;

			}
			catch(Exception $e)
			{
				die('Erreur:'.$e->getMessage());
			}

		}

		static public function selectAll($sql){
			$con = self::connect();
			$results = array();

			$request = $con->prepare($sql);
			$request->execute();

			while(($row = $request->fetch(PDO::FETCH_OBJ)) != null){
				array_push($results, $row);
			}
			return $results;
		}

		static public function selectById($sql, $id){
			$con = self::connect();
			$results = array();

			$request = $con->prepare($sql);
			$request->execute();

			while(($row = $request->fetch(PDO::FETCH_OBJ)) != null){
				array_push($results, $row);
			}
			return $results;
		}

	}


