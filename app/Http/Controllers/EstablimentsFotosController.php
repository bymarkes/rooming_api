<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Establiment;



class EstablimentsFotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $establiment = Establiment::find($id);
        if ($establiment) {
            # code...
            $fotos = $establiment->Fotos;
            return $fotos;
        }else{
            return response()->json('Establiment NOT FOUND', 404);
        }
    }
}
