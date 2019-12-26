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
        $funcionarios = file_get_contents('funcionarios.json');
        
        // Decode JSON format and return an object
        $json = json_decode($funcionarios);

        $filtered = Arr::where($json, function ($value, $key) {
            return $value->pais == 'Brasil';
        });

        return json_encode($filtered);
    }
}
