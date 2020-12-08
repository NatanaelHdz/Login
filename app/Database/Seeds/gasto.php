<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Gasto extends Seeder
{
	public function run()
	{

		$data = [
					"concepto"	=> 	'Equipos Thinkpad',
					"monto"	=>	'56,895.86',
					"fecha"		=>	'08/12/2020'
				];
		$this->db->table('t_gastos')->insert($data);
	}
}
