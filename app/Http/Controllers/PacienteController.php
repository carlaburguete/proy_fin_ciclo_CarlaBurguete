<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Especialista;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function eliminarPaciente(){

    }

    public function index()
    {
        $pacientes = Paciente::All();
        $especialistas = Especialista::All();
        return view("vistaespecialista.listapacientes",['pacientes'=>$pacientes, 'especialistas'=>$especialistas]);
    }

    public function listadoGeneral(){
        $pacientes = Paciente::All();
        $especialistas = Especialista::All();
        return view("vistasecretaria.listadogeneral",['pacientes'=>$pacientes, 'especialistas'=>$especialistas]);
    }

    public function datosPersonales(){
        $pacientes = Paciente::All();
        return view("vistasecretaria.datospersonales",['pacientes'=>$pacientes]);
    }

    public function historialPaciente($id){
        $paciente = Paciente::find($id);
        return view("vistaespecialista.historial",['paciente'=>$paciente]);
    }

    public function editarHistorial(Request $request){
        $datos = $request->All();
        $paciente = Paciente::find($datos['id']);
        $paciente->fill([
            'historial' => $datos['textareaHistorial']
        ]);
        $paciente->save();
        return redirect()->route('historialPaciente', $paciente->id);
    }

    public function editarTratamiento(Request $request){
        $datos = $request->All();
        $paciente = Paciente::find($datos['id']);
        $paciente->fill([
            'tratamiento' => $datos['textareaTratamiento']
        ]);
        $paciente->save();
        return redirect()->route('tratamientoPaciente', $paciente->id);
    }

    public function editarEvolucion(Request $request){

        $datos = $request->All();
        $paciente = Paciente::find($datos['id']);
        $evolucionNueva = $paciente->evolucion."\n".$datos['textareaEvolucion'];
        $paciente->fill([
            'evolucion' => $evolucionNueva
        ]);
        $paciente->save();
        return redirect()->route('evolucionPaciente', $paciente->id);
    }

    public function tratamientoPaciente($id){
        $paciente = Paciente::find($id);
        return view("vistaespecialista.tratamientos",['paciente'=>$paciente]);
    }

    public function evolucionPaciente($id){
        $paciente = Paciente::find($id);
        return view("vistaespecialista.evolucion",['paciente'=>$paciente]);
    }

    public function nuevoPaciente(){
        return view("vistasecretaria.nuevopaciente");
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
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
