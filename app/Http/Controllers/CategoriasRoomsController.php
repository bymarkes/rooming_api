<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Categoria;



class CategoriasRoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $categoria = Categoria::find($id);
        
         if ($categoria) {
            # code...
            $rooms = $categoria->rooms;
            return response()->json($rooms, 200);
        }else{
            return response()->json('Categoria NOT FOUND', 404);
        }
    }
