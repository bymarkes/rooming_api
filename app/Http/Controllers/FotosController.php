<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Room;



class FotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $room = Room::find($id);
        $fotos = $room->Fotos;
        return $fotos;
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
            $foto = Foto::create($request->all());
            return response()->json($foto, 201);
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
            $foto = Foto::find($id);
            if ($foto) {
                # code...
                return response()->json($foto, 201);
            }else{
                return response()->json('Foto NOT FOUND', 404); 
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
            $foto = Foto::find($id);
            if ($foto) {
                # code...
                $foto->update($request->all());
                return response()->json($foto, 200);
            }else{
                return response()->json('Foto NOT FOUND', 404); 
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
            $foto = Foto::find($id);
            if ($foto) {
                # code...
                $foto->delete();
                return response()->json(null, 204);
            }else{
                return response()->json('Foto NOT FOUND', 404); 
            }
        }else{
            return response()->json('ROOM NOT FOUND', 404); 
        }       
    }
}
