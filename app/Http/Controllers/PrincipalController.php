<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
       return view('site.principal');
       //view é um metodo nativo do laravel, indicando qual view dentro
       // string, dentro de um site.retonro
       //n precisa passar a blade
    }
}
