<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class UsuarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuari::all();
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
        $usuari = Usuari::create($request->all());
        return response()->json($usuari, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nick)
    {
        //
        $usuari = Usuari::where('Nick', $nick)->first();

        if ($usuari) {
            # code...
            return response()->json($usuari, 200);
        }else{
            return response()->json('Usuari NOT FOUND', 404);
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
    public function update(Request $request,  $nick)
    {
        //
        $usuari = Usuari::where('Nick', $nick)->first();

        if ($usuari) {
            # code...
            $usuari->update($request->all()); 
            return response()->json($usuari, 200);
        }else{
            return response()->json('Usuari NOT FOUND', 404);
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
        $usuari = Usuari::find($id);
        $usuari->delete();
        return response()->json(null, 204);
    }
}
