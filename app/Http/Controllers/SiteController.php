<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Everaldo',
                'birth' => '29/01/90',
                'idade' => 38
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Clóvis',
                'birth' => '10/11/1933',
                'idade' => 45
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2
            ]
        ];

        $dados['pessoas'] = $pessoas;

        return view('bemvindo', $dados);
    }

    public function ex02()
    {
        $numero = 1;

        $url = 'https://i.pravatar.cc/150?img=' . $numero;

        $dados['url'] = $url;

        return view('exercicio', $dados);
    }

    public function index2(){


        return view('include');
    }

    public function components(){
        return view('comp');
    }
}
