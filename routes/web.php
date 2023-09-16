<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\formularioController;



/* Route::get('/', function () {
    return view('home');
    });
 Route::view('/', 'home'); 
*/

Route::view('/', 'home');

//rutas de las formulario de las boletas

//boleta de quimica
Route::get('/quimica',  [FormularioController::class, 'quimica']);
Route::post('/pdfquimica',  [FormularioController::class, 'pdfquimica']);

//boleta de hemogloblina para niños
Route::get('/hem-ninos',  [FormularioController::class, 'hemninos']);
Route::post('/pdf-hem-ninos',  [FormularioController::class, 'pdfhemninos']);
 
//boleta de hemoglobia y quimica
Route::get('/hem-quimica',  [FormularioController::class, 'hemquimica']);
Route::post('/pdf-hem-quimica',  [FormularioController::class, 'pdfhemquimica']);
 
//boleta de Urocultivo Positivo
Route::get('/uro-pos',  [FormularioController::class, 'urocultivopos']);
Route::post('/uro-pos',  [FormularioController::class, 'pdfurocultivopos']);

//boleta de Urocultivo Negativo
Route::get('/uro-neg',  [FormularioController::class, 'urocultivoneg']);
Route::post('/uro-neg',  [FormularioController::class, 'pdfurocultivoneg']);

//boleta de Tipeo sanguineo
Route::get('/tipo-san',  [FormularioController::class, 'tiposan']);
Route::post('/tipo-san',  [FormularioController::class, 'pdftiposan']);

//boleta de tarjeta de Tipeo sanguineo
Route::get('/tar-tipo-san',  [FormularioController::class, 'tartiposan']);
Route::post('/tar-tipo-san',  [FormularioController::class, 'pdftartiposan']);

//boleta de hdl-ldl
Route::get('/hdl-ldl',  [FormularioController::class, 'hdlldl']);
Route::post('/hdl-ldl',  [FormularioController::class, 'pdfhdlldl']);

//boleta de vih
Route::get('/vih',  [FormularioController::class, 'vih']);
Route::post('/vih',  [FormularioController::class, 'pdfvih']);

//boleta de HB GLICOSILADA
Route::get('/hb-glico',  [FormularioController::class, 'hbglico']);
Route::post('/hb-glico',  [FormularioController::class, 'pdfhbglico']);

//boleta de ORINA GENERAL
Route::get('/orina',  [FormularioController::class, 'orina']);
Route::post('/orina',  [FormularioController::class, 'pdforina']);

//boleta de HECES
Route::get('/heces',  [FormularioController::class, 'heces']);
Route::post('/heces',  [FormularioController::class, 'pdfheces']);

//boleta de coprocultivo
Route::get('/coprocultivo',  [FormularioController::class, 'coprocultivo']);
Route::post('/coprocultivo',  [FormularioController::class, 'pdfcoprocultivo']);

//boleta de urocultivo postivo intermedio
Route::get('/uroposinter',  [FormularioController::class, 'uroposinter']);
Route::post('/uroposinter',  [FormularioController::class, 'pdfuroposinter']);

//boleta de urocultivo postivo intermedio
Route::get('/vdrl-rpr',  [FormularioController::class, 'vdrlrpr']);
Route::post('/vdrl-rpr',  [FormularioController::class, 'pdfvdrlrpr']);

//boleta de vitamina d
Route::get('/vitaminad',  [FormularioController::class, 'vitaminad']);
Route::post('/vitaminad',  [FormularioController::class, 'pdfvitaminad']);

//boleta de koh
Route::get('/koh',  [FormularioController::class, 'koh']);
Route::post('/koh',  [FormularioController::class, 'pdfkoh']);

// TOXOPLASMA GONDII IgM - IgG
Route::get('/toxo',  [FormularioController::class, 'toxo']);
Route::post('/toxo',  [FormularioController::class, 'pdftoxo']);

// TIROIDES
Route::get('/tiroides',  [FormularioController::class, 'tiroides']);
Route::post('/tiroides',  [FormularioController::class, 'pdftiroides']);

// HT - HB
Route::get('/ht-hb',  [FormularioController::class, 'hthb']);
Route::post('/ht-hb',  [FormularioController::class, 'pdfhthb']);

// PSA
Route::get('/psa',  [FormularioController::class, 'psa']);
Route::post('/psa',  [FormularioController::class, 'pdfpsa']);

// PES
Route::get('/pes',  [FormularioController::class, 'pes']);
Route::post('/pes',  [FormularioController::class, 'pdfpes']);

// H. PYLORI EN SANGRE
Route::get('/pylorisan',  [FormularioController::class, 'pylorisan']);
Route::post('/pylorisan',  [FormularioController::class, 'pdfpylorisan']);

// H. PYLORI EN HECES
Route::get('/pylorihec',  [FormularioController::class, 'pylorihec']);
Route::post('/pylorihec',  [FormularioController::class, 'pdfpylorihec']);
 
// GOTA GRUESA
Route::get('/gotagruesa',  [FormularioController::class, 'gotagruesa']);
Route::post('/gotagruesa',  [FormularioController::class, 'pdfgotagruesa']);
 
// FILTRADO GLOMERULAR
Route::get('/filglomerular',  [FormularioController::class, 'filglomerular']);
Route::post('/filglomerular',  [FormularioController::class, 'pdffilglomerular']);
 