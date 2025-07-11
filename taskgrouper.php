<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class TareasController extends Controller
{
    public function agruparTareas(Request $request)
    {
        $tareas = $request->input('tareas', []);
        
        $agrupadas = collect($tareas)
            ->groupBy('estado')
            ->map(function ($items) {
                return $items->pluck('titulo')->all();
            });
            
        return response()->json($agrupadas);
    }
}
