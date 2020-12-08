<?php namespace App\Controllers;
	use App\Models\Usuarios;
class Login extends BaseController
{
	public function index()
	{
		$mensaje = session('mensaje');
		return view('login',["mensaje" => $mensaje]);
	}

	public function inicio(){
		$vistas = view('plantilla/header').
				  view('plantilla/content').
				  view('plantilla/footer');
		return $vistas;
	}

	public function login(){
		$Usuarios = new Usuarios();
		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');

		$datosUsuario = $Usuarios ->obtenerUsuario(['usuario' => $usuario]);
		
		if(count($datosUsuario) > 0  && 
			password_verify($password, $datosUsuario[0]['password'])){

			$data = [
						"usuario"	=> $datosUsuario[0]['usuario'],
						"tipo"		=> $datosUsuario[0]['tipo']
					];
			$session = session();
			$session->set($data); 
			return redirect()->to(base_url('/inicio'))->with('mensaje', '1');

		}else{	
			return redirect()->to(base_url('/'))->with('mensaje', '0');

		}	
	}

	public function salir(){
			$session = session();
			$session->destroy();
			return redirect()->to(base_url('/'));
	}

	public function registro(){
		return view('registro');
	}

	public function registrar(){
		$datos = [
					"usuario"	=> $_POST['usuario'],
					"paterno"	=> $_POST['paterno'],
					"email"		=> $_POST['email'],
					"tipo"		=> $_POST['tipo'],
					"password"		=> password_hash($_POST['password'], PASSWORD_DEFAULT)
				];
		$Crud = new Usuarios();
		$respuesta = $Crud->insertar($datos);
		if($respuesta){
			return redirect()->to(base_url().'/');
		}else{
			return redirect()->to(base_url().'/registro');
		}
	}

	public function crear(){
		$datos = [
					"concepto" => $_POST['concepto'],
					"monto"=> $_POST['monto'],
					"fecha"=> $_POST['fecha']
				];
		$Crud = new Usuarios();
		$respuesta = $Crud->insertarG($datos);
		if($respuesta){
			echo "<script>alert('Registro, Exitoso!');</script>";
			return redirect()->to(base_url().'/inicio');
		}else{
			return redirect()->to(base_url().'/inicio');
		}
	}

	public function tabla(){
		$Crud = new Usuarios();
		$datos = $Crud->gastos();
		$data = [
					"datos" => $datos
				];
		$vistas = view('plantilla/header').
				  view('tabla', $data);
		
		return $vistas;
	}

	public function obtenerId($idGasto){
		$data = ["id_gasto" => $idGasto];
		$Crud = new Usuarios();
		$respuesta = $Crud->obtenerId($data);
		$datos = [
					"datos" => $respuesta
				];
		$vistas = view('plantilla/header').
				  view('plantilla/actualizar', $datos);

		return $vistas;

	}

	public function actualizar(){
		$datos = [
					"concepto" => $_POST['concepto'],
					"monto"=> $_POST['monto'],
					"fecha"=> $_POST['fecha']
				];
		$Crud = new Usuarios();
		$idGasto = $_POST['idGasto'];
		$respuesta = $Crud->actualizar($datos, $idGasto);
		if($respuesta){
			return redirect()->to(base_url().'/tabla');
		}else{
			return redirect()->to(base_url().'/tabla');
		}
	}

	public function eliminar($idGasto){
		$Crud = new Usuarios();
		$data = ["id_gasto" => $idGasto];
		$respuesta = $Crud->eliminar($data);
		if($respuesta){
			return redirect()->to(base_url().'/tabla');
		}else{
			return redirect()->to(base_url().'/tabla');
		}
	}
	//--------------------------------------------------------------------

}
