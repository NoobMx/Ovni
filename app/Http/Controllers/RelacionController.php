<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Pais;


use Illuminate\Http\Request;

class RelacionController extends Controller
{
    // public function index(){
    //     $eventos = Evento::where('id','=',1)->get();
    //     return view('generic',compact('eventos'));
    // }
    public function index()
    {
        $eventos = Pais::where('id','=',1)->get();
        // $eventos=Evento::where('id','=',1)->get();
        return view('generic', compact('eventos'));
    }
}
