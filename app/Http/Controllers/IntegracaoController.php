<?php

namespace App\Http\Controllers;

use App\API\ApiError;
use App\Integracao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntegracaoController extends Controller
{
            	/**
	 * @var Integracao
	 */
	private $integracao;

	public function __construct(Integracao $integracao)
	{
		$this->integracao = $integracao;
	}

	public function index()
    {
    	return response()->json($this->integracao->all());
    }

    public function show($ID)
    {
    	$integracao = $this->integracao->find($ID);

    	if(! $integracao) return response()->json(ApiError::errorMessage('Integração não encontrado!', 4040), 404);

    	$data = ['data' => $integracao];
	    return response()->json($data);
    }

    public function store(Request $request)
    {
		try {

			$integracaoData = $request->all();
			$this->integracao->create($integracaoData);

			$return = ['data' => ['msg' => 'Integração criado com sucesso!']];
			return response()->json($return, 201);

			} catch (\Exception $e) {
				if(config('app.debug')) {
					return response()->json(ApiError::errorMessage($e->getMessage(), 1010), 500);
				}
				return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de salvar', 1010),  500);
			}
    }
}
