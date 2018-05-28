<?php

namespace App\Http\Controllers;

use App\Service;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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

        Student::create([
            'service_id' => $service->id,
            'user_id' => Auth::user()->id,
            'numero_control' => $request->num_control,
            'nombre' => $request->nombre,
            'semestre' => $request->semestre,
            'carrera' => $request->carrera,
            't_sangre' => $request->t_sangre,
            'tel_emerg' => $request->tel_emerg,
            'tel_propio' => $request->tel_propio,
            'direccion' => $request->direccion,
            'alergia' => $request->alergia
        ]);
        dd('Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('stundets.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $service = Service::create([
            'cod_serv' => $request->cod_serv,
            'diagnostico' => $request->diagnostico
        ]);

        Student::create([
            'service_id' => $service->id,
            'user_id' => Auth::user()->id,
            'numero_control' => $request->num_control,
            'nombre' => $request->nombre,
            'semestre' => $request->semestre,
            'carrera' => $request->carrera,
            't_sangre' => $request->t_sangre,
            'tel_emerg' => $request->tel_emerg,
            'tel_propio' => $request->tel_propio,
            'direccion' => $request->direccion,
            'alergia' => $request->alergia
        ]);
        dd('Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->service->delete();
        $student->delete();
        return redirect()->route('students.index');
    }
}
