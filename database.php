<?php
	//Database Settings are done here ->
	//ADD Database information here
	$database_name="app";
	$database_username="root";
	$database_password="";
	$database_host="localhost";
	
	
	class db{
		public static $con = NULL; 
		
		//connection to database is done on creation of db Object
		public function __construct(){
			if(!isset(self::$con)){
				//connect to database
				self::$con = mysqli_connect("'".$database_host."'","'".$database_username."'","'".$database_password."'","'".$database_password."'");
				// Check connection
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
			}
			
		}
		
		
		//method for query to the database
		public function query($query="SELECT * FROM data"){
			
			return mysqli_fetch_assoc(mysqli_query(self::$con,$query));
			
		}
		
		//method for insertion to the database
		public function insert($insert,$tablename){
			$column='';
			$val='';
				foreach($insert as $key=>$value){
					$column .=$key.",";
					$val .="'".$value."'".",";
				}
			$column = rtrim($column,",");
			$val = rtrim($val,",");
			
			$query="INSERT INTO ". $tablename."(". $column .")
					VALUES (". $val .")";
					
			mysqli_query(self::$con,$query);
			
		}
	}
?>