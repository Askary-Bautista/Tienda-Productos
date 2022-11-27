<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\caballero;
use App\Models\dama;
use App\Models\nino;

class tiendaController extends Controller
{
    public function agregar(Request $request)
    {
        if ($request->post('categoria') == "caballero") {
            $caballero = new caballero();
            $caballero->nombre = $request->post('nombre');
            $caballero->precio = $request->post('precio');
            $caballero->categoria = $request->post('categoria');
            $caballero->imagen = $request->post('imagen');
            $caballero->save();

        } else if ($request->post('categoria') == "dama") {
            $dama = new dama();
            $dama->nombre = $request->post('nombre');
            $dama->precio = $request->post('precio');
            $dama->categoria = $request->post('categoria');
            $dama->imagen = $request->post('imagen');
            $dama->save();

        } else {
            $nino = new nino();
            $nino->nombre = $request->post('nombre');
            $nino->precio = $request->post('precio');
            $nino->categoria = $request->post('categoria');
            $nino->imagen = $request->post('imagen');
            $nino->save();
        }


        $datosC = caballero::orderBy('idCaballero', 'asc')->paginate(20);
        $datosD = dama::orderBy('idDama', 'asc')->paginate(20);
        $datosN = nino::orderBy('idNino', 'asc')->paginate(20);
        //dd($datos);
        return view('tienda', compact('datosC', 'datosD', 'datosN'));
    }
}
