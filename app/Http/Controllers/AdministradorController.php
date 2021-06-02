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

    public function validaUsuario(Request $request){
        $entrada = $request->all();
        $pacientes = Paciente::All();
        $secretarios = Secretario::All();
        $especialistas = Especialista::All();
        $administradores = Administrador::All();
        foreach($pacientes as $paciente){
            if ($entrada['nom_usuario'] == $paciente->nom_usuario) {
                if ($entrada['password'] == $paciente->password) {
                    redirect()->route('vista_paciente.citaspersonales');
                }
            } else {
                redirect()->route('login')->with('status', 'Error en los campos introducidos');
            }
        }
        foreach($secretarios as $secretario){
            if ($entrada['nom_usuario'] == $secretario->nom_usuario) {
                if ($entrada['password'] == $secretario->password) {
                    redirect()->route('vistasecretaria.listadogeneral');
                }
            } else {
                redirect()->route('login')->with('status', 'Error en los campos introducidos');
            }
        }
        foreach($especialistas as $especialista){
            if ($entrada['nom_usuario'] == $especialista->nom_usuario) {
                if ($entrada['password'] == $especialista->password) {
                    redirect()->route('vistaespecialista.listapacientes');
                }
            } else {
                redirect()->route('login')->with('status', 'Error en los campos introducidos');
            }
        }
        foreach($administradores as $administrador){
            if ($entrada['nom_usuario'] == $administrador->nom_usuario) {
                if ($entrada['password'] == $administrador->password) {
                    redirect()->route('vistaadministrador.listausuarios');
                }
            } else {
                redirect()->route('login')->with('status', 'Error en los campos introducidos');
            }
        }

    }

    public function altausuario(){
        return view("vistaadministrador.altausuario");
    }
    public function crearusuario(Request $request)
    {
        $entrada = $request->all();
        if ($entrada['rol'] == 'paciente'){
            $paciente = new Paciente($request->input());
            $paciente->save();
        }
        if ($entrada['rol'] == 'secretario'){
            $secretario = new Secretario($request->input());
            $secretario->save();
        }
        if ($entrada['rol'] == 'especialista'){
            $especialista = new Especialista($request->input());
            $especialista->save();
        }

        return redirect()->route("listausuarios");
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
