<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    function conectar(){
        return view('Usuário conectou');
    }

    function desconectar(){
        echo 'Usuário desconectado';
    }

}
