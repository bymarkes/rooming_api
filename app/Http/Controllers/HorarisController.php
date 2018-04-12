<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horari;
use App\Room;



class HorarisController extends Controller
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
            $horaris = $room->Horaris;
            return response()->json($horaris, 200);
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
            $horari = Horari::create($request->all());
            return response()->json($horari, 201);
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
            $horari = Horari::find($id);
            if ($horari) {
                # code...
                return response()->json($horari, 200);
            }else{
                return response()->json('Horari NOT FOUND', 404); 
            }
        }else{
            return response()->json('Room NOT FOUND', 404); 
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
            $horari = Horari::find($id);
            if ($horari) {
                # code...
                $horari->update($request->all());
                return response()->json($horari, 200);
            }else{
                return response()->json('Horari NOT FOUND', 404); 
            }
        }else{
            return response()->json('Room NOT FOUND', 404); 
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
            $horari = Horari::find($id);
            if ($horari) {
                # code...
                $horari->delete();
                return response()->json(null, 204);
            }else{
                return response()->json('Horari NOT FOUND', 404); 
            }
        }else{
            return response()->json('Room NOT FOUND', 404); 
        }       
    }
}
