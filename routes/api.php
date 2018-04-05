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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('categoria', 'CategoriasController', [
    'except' => ['edit', 'create']]);

Route::resource('comentari', 'ComentarisController' , [
    'except' => ['edit', 'create']]);

Route::resource('room', 'RoomsController' , [
    'except' => ['edit', 'create']]);

Route::resource('establiment', 'EstablimentsController' , [
    'except' => ['edit', 'create']]);

Route::resource('usuari', 'UsuarisController' , [
    'except' => ['edit', 'create']]);

Route::resource('grup', 'GrupsController' , [
    'except' => ['edit', 'create']]);

Route::resource('gps', 'GPSsController' , [
    'except' => ['edit', 'create']]);

Route::resource('room.oferta', 'OfertasController' , [
    'except' => ['edit', 'create']]);

Route::resource('reserva', 'ReservasController' , [
    'except' => ['edit', 'create']]);

Route::resource('horari', 'HorarisController' , [
    'except' => ['edit', 'create']]);

Route::resource('foto', 'FotosController' , [
    'except' => ['edit', 'create']]);

