<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;

class PanelController extends Controller {

protected $usuario;

	public function __construct(Usuario $usuario)
	{
		$this->middleware('auth');
		$this->usuario = $usuario;
	}

	public function index()
	{
		$usuarios = $this->usuario->paginate()->total();
		return view('escritorio', compact('usuarios'));
	}

}
