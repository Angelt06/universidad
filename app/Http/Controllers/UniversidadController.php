<?php

namespace App\Http\Controllers;

use App\Models\Universidad;
use Illuminate\Http\Request;

class UniversidadController extends Controller
{
    
    public function index()
    {
        $datos['universidads'] = Universidad::paginate(5);
        return view('universidad.index', $datos);
    }

   
    public function create()
    {
        return view('universidad.create');
    }

    public function store(Request $request)
    {
        //$datosUniversidad = request()->all();
        $datosUniversidad = request()->except('_token');
        Universidad::insert($datosUniversidad);
        
        // return response()->json($datosUniversidad);
        return redirect('universidad')->with('mensaje', 'Universidad agregada con éxito');
    }

    public function show(Universidad $universidad)
    {
        //
    }

    public function edit($id)
    {
        $universidad = Universidad::findOrFail($id);
        return view('universidad.edit', compact('universidad'));
    }

    public function update(Request $request, $id)
    {
        $datosUniversidad = request()->except('_token','_method');
        Universidad::where('id', '=' , $id)->update($datosUniversidad);

        $universidad = Universidad::findOrFail($id);
        return view('universidad.edit', compact('universidad'));
    }


    public function destroy($id)
    {
        Universidad::destroy($id);
        return redirect('universidad')->with('mensaje', 'Universidad Eliminada');
    }
}
