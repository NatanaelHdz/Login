<?php namespace App\Models;
	use CodeIgniter\Model;
	/**
	 * 
	 */
	class Usuarios extends Model{
		
		public function obtenerUsuario($data){
			$Usuarios = $this->db->table('t_usuarios');
			$Usuarios->where($data);
			return $Usuarios->get()->getResultArray();
		}

		public function insertar($datos){
			$Usuarios = $this->db->table('t_usuarios');
			$Usuarios ->insert($datos);
			return $this->db->insertID();
		}

		public function insertarG($datos){
			$Gastos = $this->db->table('t_gastos');
			$Gastos ->insert($datos);
			return $this->db->insertID();
		}
		public function gastos(){
			$Gastos = $this->db->query("SELECT * FROM t_gastos");
			return $Gastos->getResult();
		}

		public function obtenerId($data){
			$Gastos = $this->db->table('t_gastos');
			$Gastos->where($data);
			return $Gastos->get()->getResultArray();
		}

		public function actualizar($data, $idGasto){
			$Gastos = $this->db->table('t_gastos');
			$Gastos->set($data);
			$Gastos->where('id_gasto',$idGasto);
			return $Gastos->update();
		}
		public function eliminar($data){
			$Gastos =$this->db->table('t_gastos');
			$Gastos->where($data);
			return $Gastos->delete();
		}
	}