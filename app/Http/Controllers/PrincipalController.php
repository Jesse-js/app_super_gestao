<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        $titulo = 'Principal';
        return view('site.principal', compact('titulo'));
    }
}
