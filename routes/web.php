<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ikn;

Route::get('/', [Ikn::class, 'index']);

Route::get('/inicio', [Ikn::class, 'index']);

Route::get('/programa-ensenanza', [Ikn::class, 'programaEnsenanza']);

Route::get('/detalle-cinturon/{id_cinturon}', [Ikn::class, 'detalleCinturon']);
