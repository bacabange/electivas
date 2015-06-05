<?php namespace App\Http\Controllers\Estudiante;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estudiante;
use Illuminate\Session\SessionManager;

use Illuminate\Http\Request;

class PanelController extends Controller {

	protected $estudiante;
	protected $session;

	public function __construct(Estudiante $estudiante, SessionManager $session)
	{
		$this->estudiante = $estudiante;
		$this->session = $session;
	}

	public function getEscritorio()
	{
		
	}

	public function postLogin()
	{
		$estudiante = $this->estudiante->where('codigo', \Request::get('codigo'))->first();

		if (!is_null($estudiante)) {
			session(['estudiante' => $estudiante]);
			return redirect()->to('/estudiante/panel/escritorio');
		}else{
			return 'Nopa';
		}
	}


}
