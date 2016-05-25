<?php

namespace App\Http\Controllers;

use App\Competicion;
use App\Deporte;
use App\Partido;
use App\Services\FactoryBasketball;
use App\Services\FactoryFootball;
use App\Services\FootballGame;
use Illuminate\Http\Request;

use App\Http\Requests;

class PartidosController extends Controller
{
    public function index()
    {
       $partidos=Partido::all();
        //dd($partidos);
       /*  foreach( $partidos as $partido){
            $game=new
    aCreator = new ConcreteCreator();
    Product producto = aCreator.factoryMethod();
    producto.operacion();
        }
        endforeach*/


       // dd($partidos);
        return view('partidos.index',['partidos' => $partidos]);
    }

    public function futbol()
    {
        $deporte=Deporte::find(2);
        //$partidos= new FactoryFootball();
        // dd($deporte->id);

        return view('partidos.index',['partidos' => $deporte]);
    }
    public function baloncesto()
    {
        $deporte=Deporte::find(1);
        //$partidos= new FactoryBasketball;
       // dd($deporte->id);

        return view('partidos.index',['partidos' => $deporte]);
    }
}
