<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use DB;
//Se usaba antes de hacer el model

use App\Alumnos;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$alumnos =[
            ['alumnos'=>'Alumno #1'],
            ['alumnos'=>'Alumno #2'],
            ['alumnos'=>'Alumno #3'],
            ['alumnos'=>'Alumno #4'],
        ];*/
       //$alumnos = DB::table('alumnos')->get();

       //Get() para solamemte obtener los resultados
       // $alumnos = Alumnos::get(); 
       $alumnos = Alumnos::latest()->paginate(); 
       
       return view('alumnos', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       Alumnos::create([
            'Codigo'=> request('Codigo'),
            'Nombre'=> request('Nombre'),
            'ApellidoP'=> request('ApellidoP'),
            'ApellidoM'=> request('ApellidoM'),
            'Carrera'=> request('Carrera'),
            'Telefono'=> request('Telefono'),
            'Nacimiento'=> request('Nacimiento'),
            'Correo'=> request('Correo'),
        ]);
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
