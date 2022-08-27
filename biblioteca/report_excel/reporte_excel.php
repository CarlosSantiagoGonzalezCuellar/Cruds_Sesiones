<?php
	include 'conexion.php';
	$consulta = "SELECT * FROM libros ORDER BY genero ASC;";
	$resultado = $conn->query($consulta);

?>
<html lang="es">
	<head>
		<title> Generar Reporte a EXCEL desde BD </title>
		<meta> name="viewport" content="width, initail-scale=1, maximun-scale=1"/>
		<link href="css/stilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2> Descargar Reporte en Excel v.001 </h2>
		</header>
		<setion>
			<table class="table">
				<tr class="bg-primary">
					<th> Nombre Libro </th>
					<th> Autor        </th>
					<th> Año Edicion  </th>
					<th> Num Edicion  </th>
					<th> Genero       </th>
					<th> Editorial    </th>
				</tr>
				<?php
					while ($registros = $resultado->fetch_assoc())
					{
						echo '<tr>
								<td>'.$registros['nombre'].'</td>
								<td>'.$registros['autor'].'</td>
								<td>'.$registros['ano_edicion'].'</td>
								<td>'.$registros['num_edicion'].'</td>
								<td>'.$registros['genero'].'</td>
								<td>'.$registros['editorial'].'</td>
							</tr>';
					}
				?>
			</table>
		</setion>
		<form methood="post" action="reporte_xls.php" class="form">
		<input type="submit" name="Generar Reporte excel">
		</form>

	</body>
</html>		
