<?php

	class curso{
		private $db;
		public function __construct(){
			$this->db=new Bd;
			
		}
		public function registros(){
			$this->db->query("SELECT * FROM tblasignatura");
			return $this->db->registros();
		}
		public function registro($codigo,$dni){
			$this->db->query("SELECT * from tbl_votos where ( id_codigo='".$codigo."' OR id_codigo='".$dni."' ) ");
			return $this->db->registro();
		}
	}
