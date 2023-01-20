<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\carritoUsuario;

class CarritoUsuarioController extends Controller
{
    public function getProductosCarrito()
    {
        $userId = Auth::id();
        $data = carritoUsuario::where('id_user', $userId)
            ->where('estado', 'act')
            ->first();
        return $data->productos;
    }

    public function postProductosCarrito(Request $request)
    {
        $userId = Auth::id();
        $carritoAct = carritoUsuario::where('id_user', $userId)->where('estado', 'act')->first();
        if (empty($carritoAct)) {
            $data = carritoUsuario::create([
                'productos' => json_encode(request('productos')),
                'estado' => 'act',
                'id_user' => $userId,
            ]);
        } else {
            $data = $carritoAct->update([
                'productos' => json_encode(request('productos'))
            ]);
        }
        return $data;
    }
}
