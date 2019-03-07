<?php
	
	class perro	{
		/*Atributos*/
		private $nombre;
		private $raza;
		private $peso;
		/*Constructor*/
		public function perro ($nombre,$raza,$peso){
			$this->nombre = $nombre;
			$this->raza = $raza;
			$this->peso = $peso;

		}
		/*Metodo*/
		public function getNombre(){
			return $this->nombre;
		}

		public function getRaza(){
			return $this->raza;
		}

		public function getPeso(){
			return $this->peso;
		}
	}
?>
