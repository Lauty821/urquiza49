<?php 

	require_once ('./config/conexion.php');

	class Publicacion extends Conexion
	{
		public $id;
		public $titulo;
		public $descripcion;
		public $imagen;
	

		function __construct() 
		{
			$this->bd_nombre = 'urquiza49_bd';
		}
		 
		function get() 
		{
			$this->query = "SELECT * FROM publicacion";
			$this->get_results_from_query();
			foreach ($this->rows as $propiedad=>$valor)
			{
					$this->$propiedad = $valor;
			}
		}
		 
		function insert()
		{
			$this->query = "INSERT INTO publicacion (titulo, imagen, descripcion) 
							VALUES ('$this->titulo', '$this->imagen', '$this->descripcion')";
			$this->execute_single_query();
		}
		 
		function update() 
		{
			$this->query = "UPDATE publicacion
							SET titulo='$this->titulo', 
								imagen='$this->imagen', 
								descripcion='$this->descripcion'
								WHERE id = $this->id";
			$this->execute_single_query();
		}
		 
		function delete() 
		{
			$this->query = "DELETE FROM publicacion
							WHERE id = '$this->id'";
			$this->execute_single_query();
		}
    }

?>