<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::resource('token', 'TokensController', [
    'only' => ['store', 'show', 'destroy']]);

Route::resource('categoria', 'CategoriasController', [
    'only' => ['edit', 'store', 'destroy']]);

Route::resource('categoria.room', 'CategoriasRoomsController', [
    'only' => ['index']]);

Route::resource('room', 'RoomsController' , [
    'except' => ['edit', 'create']]);

Route::resource('room.comentari', 'ComentarisController' , [
    'except' => ['edit', 'create']]);

Route::resource('room.oferta', 'OfertasController' , [
    'except' => ['edit', 'create']]);

Route::resource('room.reserva', 'ReservasController' , [
    'except' => ['edit', 'create']]);

Route::resource('room.horari', 'HorarisController' , [
    'except' => ['edit', 'create']]);

Route::resource('room.foto', 'RoomsFotosController' , [
    'only' => ['index']]);

Route::resource('foto', 'FotosController' , [
    'except' => ['edit', 'create']]);

Route::resource('establiment', 'EstablimentsController' , [
    'except' => ['edit', 'create']]);

Route::resource('establiment.room', 'EstablimentsRoomsController', [
    'only' => ['index']]);

Route::resource('establiment.foto', 'EstablimentsFotosController' , [
    'only' => ['index']]);

Route::resource('usuari', 'UsuarisController' , [
    'except' => ['index', 'edit', 'create']]);

Route::resource('grup', 'GrupsController' , [
    'except' => ['edit', 'create']]);

Route::resource('establiment.gps', 'GPSsController' , [
    'except' => ['edit', 'create']]);


