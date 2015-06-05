<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Materia;
use App\Http\Requests\CrearElectivaRequest;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

class ElectivaController extends Controller {

	protected $electiva;
	protected $session;

	public function __construct(Materia $electiva, SessionManager $session)
	{
		$this->electiva = $electiva;
		$this->session = $session;
	}

	public function index()
	{
		$electivas = $this->electiva->paginate();
		return view('electivas.index', compact('electivas'));
	}

	public function create()
	{
		return view('electivas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearElectivaRequest $request)
	{
		$electiva = new Materia;
		$electiva->fill($request->only('nombre', 'descripcion', 'n_cupos', 'id_usuario'));
		if ($electiva->save()) {
			$this->session->flash('message', 'Electiva creada con éxito');
			return \Redirect::route('admin.electiva.index');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
