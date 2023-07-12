<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{

    public function index()
    {
        $datos['salons'] = Salon::paginate(5);
        return view('salon.index', $datos);
    }

 
    public function create()
    {
        return view('salon.create');
    }

  
    public function store(Request $request)
    {
        $datosSalon = request()->except('_token');
        Salon::insert($datosSalon);
        return response()->json($datosSalon);
    }

    public function show(Salon $salon)
    {
        //
    }

  
    public function edit($id)
    {
        $salon = Salon::findOrFail($id);
        return view('salon.edit', compact('salon'));
    }


    public function update(Request $request, Salon $salon)
    {
        //
    }

    public function destroy($id)
    {
        Salon::destroy($id);
        return redirect('salon');
    }
}
