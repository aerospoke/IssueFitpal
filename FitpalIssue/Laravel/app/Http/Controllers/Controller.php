<?php

namespace App\Http\Controllers;
use App\Models\Clase; 
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
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
            'descripcion' => 'nullable',
            'hora_inicio' => 'required|date',
            'hora_fin' => 'required|date|after:hora_inicio',
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
            'hora_inicio' => 'required|date',
            'hora_fin' => 'required|date|after:hora_inicio',
        ]);

        $clase->update($request->all());

        return response()->json($clase, 200);
    }

    public function destroy($id)
    {
        $clase = Clase::find($id);

        if (!$clase) {
            return response()->json(['error' => 'Clase no encontrada'], 404);
        }

        $clase->delete();

        return response()->json(['message' => 'Clase eliminada correctamente'], 200);
    }
}