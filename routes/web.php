<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

require_once __DIR__.'\..\lib\phpqrcode\qrlib.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/show', function () {
    $path = '..\public\storage\test.png';

    $response = Http::withToken(env('APP_API'))->post('http://149.202.12.81/rapidprest_i2/public/api/maq1/generarqr/prueba1', [
        'cantidad' =>  request('quantity'),
        'numeroautorizacion' => substr(request('phone'),-4)
    ]);

    $obj = json_decode($response->getBody());

    QRCODE::png($obj->data->codigo, $path, 'H', 4, 4);

    return view('show', ['name' => request('name'), 'quantity' => request('quantity'), 'phone' => request('phone')]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});
