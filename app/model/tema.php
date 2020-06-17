<?php

	class tema{
		private $db;
		public function __construct(){
			$this->db=new Bd;
			
		}
		public function registros($curso){
			$this->db->query("SELECT * FROM tbltemass INNER JOIN tblasignatura ON tbltemass.IdAsignatura=tblasignatura.IdAsignatura WHERE tblasignatura.IdAsignatura='$curso'");
			return $this->db->registros();
		}
		public function registro($curso){
			$this->db->query("SELECT * FROM tbltemass INNER JOIN tblasignatura ON tbltemass.IdAsignatura=tblasignatura.IdAsignatura WHERE tblasignatura.nombreAsig='$curso'");
			return $this->db->registro();
		}
	}
