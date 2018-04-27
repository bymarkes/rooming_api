<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gps;



class GpssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Gps::all(), 200);

    }
}
