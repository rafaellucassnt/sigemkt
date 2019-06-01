<?php

namespace App\Http\Controllers;

use App\API\ApiError;
use App\Campanha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampanhaController extends Controller
{
	/**
	 * @var Campanha
	 */
	private $campanha;

	public function __construct(Campanha $campanha)
	{
		$this->campanha = $campanha;
	}

	public function index()
    {
    	return response()->json($this->campanha->all());
    }

    public function show($ID)
    {
    	$campanha = $this->campanha->find($ID);

    	if(! $campanha) return response()->json(ApiError::errorMessage('Campanha não encontrado!', 4040), 404);

    	$data = ['data' => $campanha];
	    return response()->json($data);
    }

    public function store(Request $request)
    {
		try {

			$campanhaData = $request->all();
			$this->campanha->create($campanhaData);

			$return = ['data' => ['msg' => 'Campanha criado com sucesso!']];
			return response()->json($return, 201);

		} catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1010), 500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de salvar', 1010),  500);
		}
    }

}
