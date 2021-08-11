<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
$host="localhost";
$usuario="root";
$contraseña="";
$base="tap-soft";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion ->mysqli_connect_errno().")".$conexion->mysqli_connect_error());
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$resAlumnos=$conexion->query("SELECT * FROM competitor order by score desc");


///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
echo '<table class="table" style="font-size:15px; margin-top:-1%;">

				<tr class="active">
					<th >NOMBRE</th>
					<th >NÚMERO DE TAPA</th>
				</tr>';

				while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
						 <td>'.$filaAlumnos['name'].'</td>
						 <td>'.$filaAlumnos['score'].'</td>
						 </tr>';
				}
				echo '</table>';
?>