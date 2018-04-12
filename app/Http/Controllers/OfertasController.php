<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;
use App\Room;



class OfertasController extends Controller
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
            $ofertas = $room->ofertas;
            return response()->json($ofertas, 200);
        }else{
            return response()->json('Room NOT FOUND', 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        //
        $room = Room::find($id);
        if ($room) {
            # code...
            $oferta = Oferta::create($request->all());
            return response()->json($oferta, 201);
        }else{
            return response()->json('ROOM NOT FOUND', 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idRoom, $id)
    {
        //
        $room = Room::find($idRoom);
        if ($room) {
            $oferta = Oferta::find($id);
            if ($oferta) {
                # code...
                return response()->json($oferta, 200);
            }else{
                return response()->json('OFERTA NOT FOUND', 404); 
            }
        }else{
            return response()->json('ROOM NOT FOUND', 404); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idRoom, $id)
    {
        //
        $room = Room::find($idRoom);
        if ($room) {
            $oferta = Oferta::find($id);
            if ($oferta) {
                # code...
                $oferta->update($request->all());
                return response()->json($oferta, 200);
            }else{
                return response()->json('OFERTA NOT FOUND', 404); 
            }
        }else{
            return response()->json('ROOM NOT FOUND', 404); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idRoom, $id)
    {
        //
        $room = Room::find($idRoom);
        if ($room) {
            $oferta = Oferta::find($id);
            if ($oferta) {
                # code...
                $oferta->delete();
                return response()->json(null, 204);
            }else{
                return response()->json('OFERTA NOT FOUND', 404); 
            }
        }else{
            return response()->json('ROOM NOT FOUND', 404); 
        }       
    }
}
