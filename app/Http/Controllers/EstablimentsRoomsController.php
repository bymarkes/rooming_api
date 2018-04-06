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
        $rooms = $establiment->Rooms;
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
        $establiment = Establiment::find($id);
        if ($establiment) {
            # code...
            $room = Room::create($request->all());
            return response()->json($room, 201);
        }else{
            return response()->json('Establiment NOT FOUND', 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEstabliment, $id)
    {
        //
        $establiment = Establiment::find($idEstabliment);
        if ($establiment) {
            $room = Room::find($id);
            if ($room) {
                # code...
                return response()->json($room, 201);
            }else{
                return response()->json('Room NOT FOUND', 404); 
            }
        }else{
            return response()->json('Establiment NOT FOUND', 404); 
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
    public function update(Request $request, $idEstabliment, $id)
    {
        //
        $establiment = Establiment::find($idEstabliment);
        if ($establiment) {
            $room = Room::find($id);
            if ($room) {
                # code...
                $room->update($request->all());
                return response()->json($room, 200);
            }else{
                return response()->json('Gps NOT FOUND', 404); 
            }
        }else{
            return response()->json('Establiment NOT FOUND', 404); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEstabliment, $id)
    {
        //
        $establiment = Establiment::find($idEstabliment);
        if ($establiment) {
            $gps = Gps::find($id);
            if ($gps) {
                # code...
                $gps->delete();
                return response()->json(null, 204);
            }else{
                return response()->json('Gps NOT FOUND', 404); 
            }
        }else{
            return response()->json('Establiment NOT FOUND', 404); 
        }       
    }
}
