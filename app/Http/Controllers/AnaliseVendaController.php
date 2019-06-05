<?php

namespace App\Http\Controllers;

use App\API\ApiError;
use App\AnaliseVenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnaliseVendaController extends Controller
{
        	/**
	 * @var AnaliseVenda
	 */
	private $analisevenda;

	public function __construct(AnaliseVenda $analisevenda)
	{
		$this->analisevenda = $analisevenda;
	}

	public function index()
    {
    	return response()->json($this->analisevenda->all());
    }

    public function show($ID)
    {
    	$analisevenda = $this->analisevenda->find($ID);

    	if(! $analisevenda) return response()->json(ApiError::errorMessage('Recurso não encontrado!', 4040), 404);

    	$data = ['data' => $analisevenda];
	    return response()->json($data);
    }

    public function store(Request $request)
    {
		try {

			$analisevendaData = $request->all();
			$this->analisevenda->create($analisevendaData);

			$return = ['data' => ['msg' => 'Recurso criado com sucesso!']];
			return response()->json($return, 201);

		} catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1010), 500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de salvar', 1010),  500);
		}
    }
}
