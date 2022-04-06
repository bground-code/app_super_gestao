<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {
        return view('site.contato');
         //view é um metodo nativo do laravel, indicando qual view dentro
       // string, dentro de um site.retonro
       //n precisa passar a blade
    }
}
