<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Establiment;



class EstablimentsRoomsController extends Controller
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
            $rooms = $establiment->rooms;
            return response()->json($rooms, 200);
        }else{
            return response()->json('Categoria NOT FOUND', 404);
        }
    }

}