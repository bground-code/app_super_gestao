<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobrenos(){
        return view('site.sobre-nos');
         //view é um metodo nativo do laravel, indicando qual view dentro
       // string, dentro de um site.retonro
       //n precisa passar a blade
    }
}
