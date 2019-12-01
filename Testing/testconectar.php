<?php
use PHPUnit\Framework\TestCase;

class Prueba extends TestCase
{
	
	public function testconectar()
	{
		$state = 1;
		define('DB_SERVER', '127.0.0.1');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_DATABASE', 'asistencia');
		$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		
		if($db)
		{
			$state = 0;	
		}	
		
		$this->assertSame(0, $state); 

		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "asistencia";
		$state = 1;
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		if($conn)
		{
			$state = 0;	
		}	
		
		$this->assertSame(0, $state); 


		$hostname = "127.0.0.1";
		$username = "root";
		$password = "";
		$databaseName = "asistencia";
		$state = 1;

		$connect = mysqli_connect($hostname, $username, $password, $databaseName);
		if($connect)
		{
			$state = 0;	
		}	
		
		$this->assertSame(0, $state); 
	
	}
                
}
   
?>
