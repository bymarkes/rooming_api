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
        $rooms = $categoria->Rooms;
        return $rooms;
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
        $categoria = Categoria::find($id);
        if ($categoria) {
            # code...
            $room = Room::create($request->all());
            return response()->json($room, 201);
        }else{
            return response()->json('Categoria NOT FOUND', 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idCategoria, $id)
    {
        //
        $categoria = Categoria::find($idCategoria);
        if ($categoria) {
            $room = Room::find($id);
            if ($room) {
                # code...
                return response()->json($room, 201);
            }else{
                return response()->json('Room NOT FOUND', 404); 
            }
        }else{
            return response()->json('Categoria NOT FOUND', 404); 
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
    public function update(Request $request, $idCategoria, $id)
    {
        //
        $categoria = Categoria::find($idCategoria);
        if ($categoria) {
            $room = Room::find($id);
            if ($room) {
                # code...
                $room->update($request->all());
                return response()->json($room, 200);
            }else{
                return response()->json('Gps NOT FOUND', 404); 
            }
        }else{
            return response()->json('Categoria NOT FOUND', 404); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCategoria, $id)
    {
        //
        $categoria = Categoria::find($idCategoria);
        if ($categoria) {
            $gps = Gps::find($id);
            if ($gps) {
                # code...
                $gps->delete();
                return response()->json(null, 204);
            }else{
                return response()->json('Gps NOT FOUND', 404); 
            }
        }else{
            return response()->json('Categoria NOT FOUND', 404); 
        }       
    }
}
