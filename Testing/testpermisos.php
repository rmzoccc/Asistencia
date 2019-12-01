<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
	public function testpermisos()
	{
		session_start();
		$sesion = $_SESSION['nombre_usuario'];
		if (empty($sesion)) {
			$this->assertEmpty($sesion);
			header("location: ../index.php?iniciar");
		}
	}
}	
?>