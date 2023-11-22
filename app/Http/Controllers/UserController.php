<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UserController extends Controller
{
    public function listarUsuarios(){
        $usuarios = Usuarios::all();    

        return view('List', ['usuarios' => $usuarios]);
    }
}
