<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gps;
use App\Establiment;



class GpssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $establiment = Establiment::find($id);
        $gpss = $establiment->gps;
        return $gpss;
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
            $gps = Gps::create($request->all());
            return response()->json($gps, 201);
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
            $gps = Gps::find($id);
            if ($gps) {
                # code...
                return response()->json($gps, 201);
            }else{
                return response()->json('Gps NOT FOUND', 404); 
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
            $gps = Gps::find($id);
            if ($gps) {
                # code...
                $gps->update($request->all());
                return response()->json($gps, 200);
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
