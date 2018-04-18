<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentari;
use App\Room;



class ComentarisController extends Controller
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
            $comentaris = $room->comentaris;
            return response()->json($comentaris, 200);
        }else{
            return response()->json('ROOM NOT FOUND', 404);
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
            $comentari = Comentari::create($request->all());
            return response()->json($comentari, 201);
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
            $comentari = Comentari::find($id);
            if ($comentari) {
                # code...
                return response()->json($comentari, 200);
            }else{
                return response()->json('Comentari NOT FOUND', 404); 
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
            $comentari = Comentari::find($id);
            if ($comentari) {
                # code...
                $comentari->update($request->all());
                return response()->json($comentari, 200);
            }else{
                return response()->json('Comentari NOT FOUND', 404); 
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
            $comentari = Comentari::find($id);
            if ($comentari) {
                # code...
                $comentari->delete();
                return response()->json(null, 204);
            }else{
                return response()->json('Comentari NOT FOUND', 404); 
            }
        }else{
            return response()->json('ROOM NOT FOUND', 404); 
        }       
    }
}
