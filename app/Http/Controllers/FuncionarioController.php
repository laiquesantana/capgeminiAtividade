<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FuncionarioController extends Controller
{
    /**
     * return list of brazil employees
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listBrazilEmployees()
    {
        $json = json_decode(file_get_contents(public_path('funcionarios.json')));


        
        $filtered = Arr::where($json, function ($value, $key) {
            return $value->pais == 'Brasil';
        });

        return json_encode($filtered);
    }
}
