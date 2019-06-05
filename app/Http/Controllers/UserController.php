<?php

namespace App\Http\Controllers;

use App\API\ApiError;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   
	/**
	 * @var User
	 */
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function index()
    {
    	return response()->json($this->user->all());
    }

    public function show($id)
    {
    	$user = $this->user->find($id);

    	if(! $user) return response()->json(ApiError::errorMessage('Recurso não encontrado!', 4040), 404);

    	$data = ['data' => $user];
	    return response()->json($data);
    }

    public function store(Request $request)
    {
		try {

			$userData = $request->all();
			$this->user->create($userData);

			$return = ['data' => ['msg' => 'Recurso criado com sucesso!']];
			return response()->json($return, 201);

		} catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1010), 500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de salvar', 1010),  500);
		}
    }

	public function update(Request $request, $id)
	{
		try {

			$userData = $request->all();
			$user     = $this->user->find($id);
			$user->update($userData);

			$return = ['data' => ['msg' => 'Usuário atualizado com sucesso!']];
			return response()->json($return, 201);

		} catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1011),  500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de atualizar', 1011), 500);
		}
	}

	public function delete(User $id)
	{
		try {
			$id->delete();

			return response()->json(['data' => ['msg' => 'Usuário: ' . $id->name . ' removido com sucesso!']], 200);

		}catch (\Exception $e) {
			if(config('app.debug')) {
				return response()->json(ApiError::errorMessage($e->getMessage(), 1012),  500);
			}
			return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de remover', 1012),  500);
		}
	}
}
