<?php

namespace App\Http\Controllers;
use App\Models\Clase;
use Illuminate\Http\Request;


class ClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::all();
        return response()->json($clases, 200);
    }

    public function show($id)
    {
        $clase = Clase::find($id);

        if (!$clase) {
            return response()->json(['error' => 'Clase no encontrada'], 404);
        }

        return response()->json($clase, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable'
        ]);

        $clase = Clase::create($request->all());

        return response()->json($clase, 201);
    }

    public function update(Request $request, $id)
    {
        $clase = Clase::find($id);

        if (!$clase) {
            return response()->json(['error' => 'Clase no encontrada'], 404);
        }

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
        ]);

        $clase->update($request->all());

        return response()->json($clase, 200);
    }

    public function destroy($id) {
        $clase = Clase::find($id);
        if ($clase) {
            $clase->delete();
            return response()->json(['message' => 'Clase eliminada correctamente'], 200);
        }
        return response()->json(['error' => 'Clase no encontrada'], 404);
      }
      
}