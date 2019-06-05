<?php

namespace App\Http\Controllers;

use App\API\ApiError;
use App\Venda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendaController extends Controller
{
        	/**
	 * @var Venda
	 */
	private $venda;

	public function __construct(Venda $venda)
	{
		$this->venda = $venda;
	}

	public function index()
    {
    	return response()->json($this->venda->all());
    }

    public function show($ID)
    {
    	$venda = $this->venda->find($ID);

    	if(! $venda) return response()->json(ApiError::errorMessage('Recurso não encontrado!', 4040), 404);

    	$data = ['data' => $venda];
	    return response()->json($data);
    }

    public function store(Request $request)
    {
		try {

			$vendaData = $request->all();
			$this->venda->create($vendaData);

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
