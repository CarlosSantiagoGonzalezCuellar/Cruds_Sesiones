<html>
<head>
	<title> Ingresar Libro</title>
</head>
<header>
Ingresa los datos del Libro
</header>
<form action='administrar_libro.php' method='post'>
	<table>
		<tr>
			<td>Nombre libro:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Autor:</td>
			<td><input type='text' name='autor' ></td>
		</tr>
		<tr>
			<td>Fecha Edición:</td>
			<td><input type='date' name='ano_edicion' ></td>
		</tr>
		<tr>
				<td> Numero Edicion : </td>
				<td> <input type = 'text' name='num_edicion'> </td>
		</tr>
		<tr>
				<td> Genero Libro : </td>
				<td> <input type = 'text' name='genero'> </td>
			</tr>
		<tr>
			<td>Editorial:</td>
			<td><input type='text' name='editorial' ></td>
		</tr>
		<tr>
			<td>Mensaje</td>
			<td><textarea name="comentario" placeholder="Comentario"></textarea>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
 
</html>