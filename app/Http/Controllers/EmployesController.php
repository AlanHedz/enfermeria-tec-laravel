<?php

namespace App\Http\Controllers;

use App\Service;
use App\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::all();
        return view('Employes.index', ['employes' => $employes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = Service::create([
            'cod_serv' => $request->cod_serv,
            'diagnostico' => $request->diagnostico
        ]);

        Employe::create([
            'service_id' => $service->id,
            'user_id' => Auth::user()->id,
            'num_ficha' => $request->num_ficha,
            'nombre' => $request->nombre,
            'horario' => $request->horario,
            'puesto' => $request->puesto
        ]);
        dd('Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $Employe)
    {
        return view('employes.show', ['employe' => $employe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $Employe)
    {
        return view('employes.edit', ['employe' => $employe ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        $service = Service::create([
            'cod_serv' => $request->cod_serv,
            'diagnostico' => $request->diagnostico
        ]);

        Employe::create([
            'service_id' => $service->id,
            'num_ficha' => $request->num_ficha,
            'nombre' => $request->nombre,
            'horario' => $request->horario,
            'puesto' => $request->puesto
        ]);
        dd('Guardado con exito');
        dd('Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        $emplote->service->delete();
        $employe->delete();
        return redirect()->route('employes.index');
    }
}
