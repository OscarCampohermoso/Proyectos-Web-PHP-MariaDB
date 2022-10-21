<?php
	function Conectarse()
	{//inttroducimos los datos de  host que son "Server", "usuario" y "contraseña" 
	 {
			$conexion = mysqli_connect('localhost', 'root', '', 'academia_clases');
			return $conexion;
		
		
	}
}

	//--------------------------

	function alta ($name,$apellidos,$ci,$dir)
	{
		$conexion = Conectarse();

			if (!$conexion)
			{
				echo "<h1>No se puede dar de alta. Error al conectar.</h1>";
				exit();
			}

		// NO poner comillas simples en nombre de tabla, ni de campos, sólo en valores alfanuméricos.
		$consulta = "INSERT INTO alumnos (nombre, apellidos, ci,direccion) VALUES ('$name', '$apellidos','$ci','$dir')";

			


		echo $consulta;

		$resultado=mysqli_query($conexion,$consulta);

			//cerramos la conexión con el motor de BD
			mysqli_close($conexion);
	}

	//--------------------------

	function baja ($id)
	{
		$conexion = Conectarse();

			if (!$conexion)
			{
				echo "<h1>No se puede dar de baja. Error al conectar.</h1>";
				exit();
			}

		// NO poner comillas simples en nombre de tabla, ni de campos, sólo en valores alfanuméricos.
		$consulta = "DELETE FROM alumnos WHERE codalumno = $id";

		echo $consulta . "<BR>";

		$resultado=mysqli_query($conexion,$consulta);

		//echo "Resultado de la operaci&oacute;n: " . $resultado;

			//cerramos la conexión con el motor de BD
			mysqli_close($conexion);

	}

	//--------------------------

	function modificacion ($id, $name,$apellidos,$ci,$dir)
	{
		$conexion = Conectarse();

			if (!$conexion)
			{
				echo "<h1>No se puede dar de alta. Error al conectar.</h1>";
				exit();
			}

		// NO poner comillas simples en nombre de tabla, ni de campos, sólo en valores alfanuméricos.

		/*
		UPDATE `agenda` SET `nombre` = 'pepe3',
						`tel` = '467641_1',
						`direccion` = 'ch 149_1',
						`mail` = 'pepe@host2.com.ar' WHERE `agenda`.`id` =2
		*/

		$consulta = "UPDATE alumnos SET nombre='$name',apellidos='$apellidos',ci='$ci',direccion='$dir'";
                $consulta = $consulta . "WHERE codalumno='$id'";


		echo $consulta;

		$resultado=mysqli_query($conexion,$consulta);

			//cerramos la conexión con el motor de BD
			mysqli_close($conexion);
	}

?>