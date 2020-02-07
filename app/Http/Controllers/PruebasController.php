<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PruebasController extends Controller
{
    //
    public function listar()
    {
        /*
        $Marcas = DB::table('marcas')
            ->select('Select * fROM marcas');
        */
        $Marcas = Marca::get();
        dd($Marcas);
    }
}
