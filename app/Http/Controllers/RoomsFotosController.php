<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Room;



class RoomsFotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $room = Room::find($id);
        if ($room) {
            # code...
            $fotos = $room->Fotos;
            return response()->json($fotos, 200);
        }else{
            return response()->json('Room NOT FOUND', 404);
        }
    }
}
