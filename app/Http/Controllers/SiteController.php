<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        //Aqui posso criar uma lógica..
        //Verificar se um usuario existe.
        //Buscar dados de um usuário,etc...

        $nome = 'Everaldo';       

        $data = [
            'apelido_nome' => $nome,
            
        ];
        return view('bemvindo', $data);
    }    
}
