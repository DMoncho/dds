<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ApuestasController extends Controller
{
    public function index()
    {

        return view('apuestas.index');
    }
}
