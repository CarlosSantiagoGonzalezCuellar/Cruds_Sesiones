<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=Libros.xls');

	require 'conexion.php';
	$consulta = "SELECT * FROM libros ORDER BY editorial ASC;";
	$resultado = $conn->query($consulta);

?>

<table>
	<tr>
		<th> Nombre Libro </th>
		<th> Autor        </th>
		<th> Año Edicion  </th>
		<th> Num Edicion  </th>
		<th> Genero       </th>
		<th> Editorial    </th>
	</tr>

	<?php
		while ($filas = mysqli_fetch_assoc($resultado))
		{

			?>
			<tr>
				<td> <?php echo $filas['nombre'] ?> </td>
				<td> <?php echo $filas['autor'] ?> </td>
				<td> <?php echo $filas['ano_edicion'] ?> </td>
				<td> <?php echo $filas['num_edicion'] ?> </td>
				<td> <?php echo $filas['genero'] ?> </td>
				<td> <?php echo $filas['editorial'] ?> </td>
            </tr>
            <?php
		}
    ?>
</table>
     