<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
	public function run()
	{
		$contra = '123';
		$contra = password_hash($contra, PASSWORD_DEFAULT);

		$data = [
					"usuario"	=> 	'Guillermo',
					"paterno"	=>	'Hernández',
					"email"		=>	'hguillermo@gmail.com',
					"password"	=>	$contra,
					"tipo"		=>	'Admin'
				];
		$this->db->table('t_usuarios')->insert($data);
	}
}
