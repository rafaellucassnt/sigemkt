<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use View;
use Util;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\Http\Controllers\Controller;
use Session;

class ApiController extends Controller
{

    public function apiUser(){
        $client = new Client();

        $urlContasPagar = 'http://sigefinanceiroapi.azurewebsites.net/Financeiro/GetContasAPagar';
   
        $responseContasPagar = $client->get($urlContasPagar);
 
        if ($responseContasPagar->getStatusCode() == 200) {
            $jsonContasPagar = $responseContasPagar->getBody();
            $contaspagar = json_decode($jsonContasPagar);

            foreach($contaspagar as $item);
            {
                dd($item->historico);
            }
           dd($historico);
         
            return view('site.api.index', ['contaspagar' => $contaspagar]);

        } else {
            \Session::flash('flash_message_error', 'Ocorreu um erro ao buscar os dados, tente novamente!');
            Redirect::to('api');
        }
    }
}
