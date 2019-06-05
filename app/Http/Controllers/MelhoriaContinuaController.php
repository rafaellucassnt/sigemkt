<?php

namespace App\Http\Controllers;

use App\API\ApiError;
use App\MelhoriaContinua;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MelhoriaContinuaController extends Controller
{
    	/**
	 * @var MelhoriaContinua
	 */
	private $melhoriacontinua;

	public function __construct(MelhoriaContinua $melhoriacontinua)
	{
		$this->melhoriacontinua = $melhoriacontinua;
	}

	public function index()
    {
    	return response()->json($this->melhoriacontinua->all());
    }

    public function show($ID)
    {
    	$melhoriacontinua = $this->melhoriacontinua->find($ID);

    	if(! $melhoriacontinua) return response()->json(ApiError::errorMessage('Recurso não encontrado!', 4040), 404);

    	$data = ['data' => $melhoriacontinua];
	    return response()->json($data);
    }

    public function store(Request $request)
    {
		try {

			$melhoriacontinuaData = $request->all();
			$this->melhoriacontinua->create($melhoriacontinuaData);

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
