<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Room;



class ReservasController extends Controller
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
            $reservas = $room->reservas;
            return response()->json($reservas, 200);
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
            $reserva = Reserva::create($request->all());
            return response()->json($reserva, 200);
        }else{
            return response()->json('Room NOT FOUND', 404);
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
            $reserva = Reserva::find($id);
            if ($reserva) {
                # code...
                return response()->json($reserva, 201);
            }else{
                return response()->json('Reserva NOT FOUND', 404); 
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
            $reserva = Reserva::find($id);
            if ($reserva) {
                # code...
                $reserva->update($request->all());
                return response()->json($reserva, 200);
            }else{
                return response()->json('Reserva NOT FOUND', 404); 
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
            $reserva = Reserva::find($id);
            if ($reserva) {
                # code...
                $reserva->delete();
                return response()->json(null, 204);
            }else{
                return response()->json('Reserva NOT FOUND', 404); 
            }
        }else{
            return response()->json('ROOM NOT FOUND', 404); 
        }       
    }
}
