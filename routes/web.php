<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/producto', function () {
    return view('producto');
});

Route::get('/que-quieres-imprimir', function () {
    return view('imprimir');
});

Route::get('/bolsas-empaques', function () {
    return view('bolsas');
});

Route::get('/kraft', function () {
    return view('bolsas.kraft');
});

Route::get('/stiker-cuadrado', function () {
    return view('bolsas.stiker-cuadrado');
});

Route::get('/stiker-redondo', function () {
    return view('bolsas.stiker-redondo');
});

Route::get('/imanes', function () {
    return view('bolsas.imanes');
});

Route::get('/pendones', function () {
    return view('pendones');
});

Route::get('/colgable', function () {
    return view('pendones.colgable');
});

Route::get('/pasacalle', function () {
    return view('pendones.pasacalle');
});

Route::get('/vinilo', function () {
    return view('pendones.vinilo');
});

Route::get('/araña', function () {
    return view('pendones.araña');
});

Route::get('/rollup', function () {
    return view('pendones.rollup');
});

Route::get('/papeleria', function () {
    return view('papeleria');
});
