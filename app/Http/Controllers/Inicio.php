<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Inicio extends Controller
{
    public function index() {
        Alert::alert('Title', 'Message', 'Type');
        $titulo = 'Inicio';
        return view('modules/inicio/index', compact('titulo'));
    }
}
