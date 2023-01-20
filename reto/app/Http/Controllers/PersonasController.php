<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\personas;
use App\Models\users_roles;

class PersonasController extends Controller
{
    public static function inicialCreate($user)
    {
        personas::create([
            'nombres' => $user['name'],
            'correo' => $user['email'],
            'id_user' => $user['id'],
            'correo' => $user['email'],
        ]);
    }

    public static function viewPersona($id)
    {
        $userRol = users_roles::where('id_user', $id)->get();
        $userRol =  isset($userRol[0]->id_rol);
        $persona =  personas::find($id);
        if ($userRol == 1) {
            return view('Admin.perfil', ['persona' => $persona]);
        } else {
            return view('User.perfil', ['persona' => $persona]);
        }
    }

    public static function update()
    {
        request()->validate(
            [
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'cedula' => 'required|string|min:10',
                'telefono' => 'required|string|max:10|min:9',
                'fecha_nacimiento' => 'required|date',
            ],
            [
                'required' => ":attribute es requerido",
                'integer' => ':attribute debe ser numero',
                'string' => ':attribute debe ser texto',
                'max:255' => ':attribute es demasiado extenso',
                'telefono.max' => 'El telefono debe tener maximo 10 numeros',
                'telefono.min' => 'El telefono debe tener minimo 9 numeros',
            ]
        );
        $personas = personas::find(request('id'));
        $personas->update([
            'nombres' => request('nombre'),
            'apellidos' => request('apellido'),
            'cedula' => request('cedula'),
            'telefono' => request('telefono'),
            'fecha_nacimiento' => request('fecha_nacimiento')
        ]);
        return redirect('perfil/' . $personas->id);
    }
}