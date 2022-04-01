<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use App\Models\Pais;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index(){
        $evento=Pais::find(1);
        //$eventos= Pais::all(); 
        return view('generic',compact('evento'));
    }

    public function g2(){
        $evento=Pais::find(2);
        //$eventos= Pais::all(); 
        return view('g2', compact('evento'));
    }

    // public function obtenerTitulo(){
    //     $titulo=Evento::find(1);
    //     return view('generic',compact('eventos'));
    // } 
    
    // public function index(){
    //     $eventos = Evento::where('id','=',1)->get();
    //     return view('generic',compact('eventos'));
    // }
    // public function index()
    // {
    //     $eventos = Pais::where('id','=',1)->get();
    //     // $eventos=Evento::where('id','=',1)->get();
    //     return view('generic', compact('eventos'));
    // }
}
