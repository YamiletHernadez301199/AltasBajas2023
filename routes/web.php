<?php

use App\Http\Controllers\Inicio;
use Illuminate\Support\Facades\Route;

Route::get('/', [Inicio::class, 'index'])->name('inicio');
