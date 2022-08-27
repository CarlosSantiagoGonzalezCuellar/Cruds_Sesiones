<?php
	// incluye la conexion BD
	require_once('conexion.php');

	class CrudLibro
	{
		//constructor de la clase
		public function construct(){}

		//metodo para insertar
		public function insertar($libro)
		{
           	$db=Db::conectar();
           // se crea la linea de insertar
           	$inserta=$db->prepare('INSERT INTO libros values(NULL,:nombre,:autor,:edicion,:num_edicion,:genero,:editorial,:comentario)');
           	$inserta->bindValue('nombre',$libro->getNombre());
           	$inserta->bindValue('autor',$libro->getAutor());
           	$inserta->bindValue('edicion',$libro->getAno_edicion());
           	$inserta->bindValue('num_edicion',$libro->getNum_edicion());
           	$inserta->bindValue('genero',$libro->getGenero());
           	$inserta->bindValue('editorial',$libro->getEditorial());
			$inserta->bindValue('comentario',$libro->getComentario());
			$inserta->execute();
		}

		// metodo para mostrar
		public function mostrar()
		{
			$db=Db::conectar();
		 	$lista_libros=[];
			$select=$db->query('SELECT * FROM libros');

			foreach ($select->fetchAll() as $libro) 
			{
			    $myLibro = new Libro();
			    $myLibro->setId($libro['id']);
			    $myLibro->setNombre($libro['nombre']);
			    $myLibro->setAutor($libro['autor']);
			    $myLibro->setAno_edicion($libro['ano_edicion']);
			    $myLibro->setNum_edicion($libro['num_edicion']);
			    $myLibro->setGenero($libro['genero']);
			    $myLibro->setEditorial($libro['editorial']);
			    $myLibro->setComentario($libro['comentario']);

			    $lista_libros[] = $myLibro;
			}
			return $lista_libros;
		}

		//metodo delete
		public function eliminar($id)
		{
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM libros WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		//metodo buscar libros
		public function obtenerLibro($id)
		{
    		$db=Db::conectar();
    		$select=$db->prepare('SELECT * FROM libros WHERE ID=:id');
    		$select->bindValue('id',$id);
    		$select->execute();
    		$libro = $select->fetch();
    		$myLibro = new Libro();
    		$myLibro->setId($libro['id']);
    		$myLibro->setNombre($libro['nombre']);
    		$myLibro->setAutor($libro['autor']);
    		$myLibro->setAno_edicion($libro['ano_edicion']);
    		$myLibro->setNum_edicion($libro['num_edicion']);
    		$myLibro->setGenero($libro['genero']);
    		$myLibro->setEditorial($libro['editorial']);
    		$myLibro->setComentario($libro['comentario']);
    		return $myLibro;
		}

		//metodo actualizare libros
		public function actualizar($libro)
		{
     		$db=Db::conectar();
     		$actualizar=$db->prepare('UPDATE libros SET nombre=:nombre,autor=:autor,ano_edicion=:ano_edicion,num_edicion=:num_edicion,genero=:genero,editorial=:editorial,comentario=:comentario WHERE ID=:id');
     		$actualizar->bindValue('id',$libro->getId());
     		$actualizar->bindValue('nombre',$libro->getNombre());
     		$actualizar->bindValue('autor',$libro->getAutor());
     		$actualizar->bindValue('ano_edicion',$libro->getAno_edicion());
     		$actualizar->bindValue('num_edicion',$libro->getNum_edicion());
     		$actualizar->bindValue('genero',$libro->getGenero());
     		$actualizar->bindValue('editorial',$libro->getEditorial());
     		$actualizar->bindValue('comentario',$libro->getComentario());
            $actualizar->execute();

		}

	}
?>