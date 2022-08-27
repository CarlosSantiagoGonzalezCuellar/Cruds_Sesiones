
<?php
	class Libro{
		private $id;
		private $nombre;
		private $autor;
		private $ano_edicion;
		private $num_edicion;
		private $genero;
		private $editorial;
		private $comentario;
 
		function __construct(){}
        
        // funcion nombre
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
        
        //Funcion autor
		public function getAutor(){
			return $this->autor;
		}
        
		public function setAutor($autor){
			$this->autor = $autor;
		}
 
        // Funcion año edicion
		public function getAno_edicion(){
		return $this->ano_edicion;
		}
 
		public function setAno_edicion($ano_edicion){
			$this->ano_edicion = $ano_edicion;
		}

		// Funcion año edicion
		public function getNum_edicion(){
		return $this->num_edicion;
		}
 
		public function setNum_edicion($num_edicion){
			$this->num_edicion = $num_edicion;
		}

		// Funcion Id
		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}

		// Funcion Genero
		public function getGenero()
		{
			return $this->genero;
		}
 
		public function setGenero($genero)
		{
			$this->genero = $genero;
		}


		// Funcion Editorial
		public function getEditorial()
		{
			return $this->editorial;
		}
 
		public function setEditorial($editorial)
		{
			$this->editorial = $editorial;
		}
		
		// Funcion Comentario
		public function getComentario()
		{
			return $this->comentario;
		}
 
		public function setComentario($comentario)
		{
			$this->comentario = $comentario;
		}
	}
?>