<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;

class FotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Foto::all();
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
    public function store(Request $request)
    {
        //
        $foto = Foto::create($request->all());
        return response()->json($foto, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $foto = Foto::find($id);
        if ($foto) {
            # code...
            return response()->json($foto, 200);
        }else{
            return response()->json('FOTO NOT FOUND', 404);
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
    public function update(Request $request,  $id)
    {
        //
        $foto = Foto::find($id);
        if ($foto) {
            # code...
            $foto->update($request->all());
            return response()->json($foto, 200);
        }else{
            return response()->json('FOTO NOT FOUND', 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $foto = Foto::find($id);
        if ($foto) {
            # code...
            $foto->delete();
            return response()->json(null, 204);
        }else{
            return response()->json('FOTO NOT FOUND', 404);
        }
    }
}