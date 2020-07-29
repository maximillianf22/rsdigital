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

Route::get('/bond', function () {
    return view('bolsas.bond');
});

Route::get('/earth', function () {
    return view('bolsas.earth');
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

Route::get('/afiches', function () {
    return view('papeleria.afiches');
});

Route::get('/calendarios', function () {
    return view('papeleria.calendarios');
});

Route::get('/carpetas', function () {
    return view('papeleria.carpetas');
});


Route::get('/carpetas', function () {
    return view('papeleria.carpetas');
});

Route::get('/factura-carta', function () {
    return view('papeleria.factura-carta');
});

Route::get('/factura-media-carta', function () {
    return view('papeleria.factura-media-carta');
});

Route::get('/factura-oficio', function () {
    return view('papeleria.factura-oficio');
});

Route::get('/membrete', function () {
    return view('papeleria.membrete');
});

Route::get('/membrete-ecologicas', function () {
    return view('papeleria.membrete-ecologicas');
});

Route::get('/plegables', function () {
    return view('papeleria.plegables');
});

Route::get('/recetarios', function () {
    return view('papeleria.recetarios');
});

Route::get('/volantes-economicos', function () {
    return view('papeleria.volantes-economicos');
});

Route::get('/volantes', function () {
    return view('papeleria.volantes');
});

Route::get('/tarjetas', function () {
    return view('tarjetas');
});

Route::get('/economica', function () {
    return view('tarjetas.economicas');
});

Route::get('/cuadradas', function () {
    return view('tarjetas.cuadradas');
});

Route::get('/brillantes', function () {
    return view('tarjetas.brillantes');
});

Route::get('/mate', function () {
    return view('tarjetas.mate');
});

Route::get('/mate-uv', function () {
    return view('tarjetas.mate-uv');
});
