<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste( int $p1,  int $p2){
//         echo " a soma de $p1 + $p2 é : " . ($p1 + $p2);
        //return view('site.teste', ['x' => $p1 ,'y' => $p2]); array associativo
        // site.teste para manter o nivel de hiaraquia
        //return view('site.teste', compact('p1', 'p2')); //compacta
        return view('site.teste')-> with('p1', $p1,) ->with('p2', $p2);
    }
}
