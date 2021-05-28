<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Especialista;
use App\Models\Secretario;
use App\Models\Paciente;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::All();
        $especialistas = Especialista::All();
        $secretarios = Secretario::All();
        return view("vistaadministrador.listausuarios",['pacientes'=>$pacientes, 'especialistas'=>$especialistas, 'secretarios'=>$secretarios]);
    }

    public function altausuario()
    {
        $pacientes = Paciente::All();
        $especialistas = Especialista::All();
        $secretarios = Secretario::All();
        return view("vistaadministrador.altausuario",['pacientes'=>$pacientes, 'especialistas'=>$especialistas, 'secretarios'=>$secretarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrador $administrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrador $administrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrador $administrador)
    {

    }
}
