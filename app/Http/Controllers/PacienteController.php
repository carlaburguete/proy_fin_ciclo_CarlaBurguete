<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Especialista;
use App\Models\Paciente;
use App\Models\Secretario;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    //funcion para devolver la lista de pacientes y los especialistas - Vista especialista
    public function index()
    {
        $pacientes = Paciente::All();
        $especialistas = Especialista::All();
        return view("vistaespecialista.listapacientes",['pacientes'=>$pacientes, 'especialistas'=>$especialistas]);
    }

    //funcion para mostrar el listado general de pacientes y especialistas - Vista secretaria
    public function listadoGeneral(){
        $pacientes = Paciente::All();
        $especialistas = Especialista::All();
        return view("vistasecretaria.listadogeneral",['pacientes'=>$pacientes, 'especialistas'=>$especialistas]);
    }

    //funcion para mostrar los datos personales del paciente seleccionado - Vista secretaria
    public function datosPersonales(){
        $pacientes = Paciente::All();
        return view("vistasecretaria.datospersonales",['pacientes'=>$pacientes]);
    }

    //funcion para mostrar historial del paciente seleccionado - Vista Especialista
    public function historialPaciente($id){
        $paciente = Paciente::find($id);
        return view("vistaespecialista.historial",['paciente'=>$paciente]);
    }

    //funcion para editar el historial del paciente seleccionado - Vista especialista
    public function editarHistorial(Request $request){
        $datos = $request->All();
        $paciente = Paciente::find($datos['id']);
        $paciente->fill([
            'historial' => $datos['textareaHistorial']
        ]);
        $paciente->save();
        return redirect()->route('historialPaciente', $paciente->id);
    }

    //funcion para editar el tratamiento del paciente seleccionado - Vista especialista
    public function editarTratamiento(Request $request){
        $datos = $request->All();
        $paciente = Paciente::find($datos['id']);
        $paciente->fill([
            'tratamiento' => $datos['textareaTratamiento']
        ]);
        $paciente->save();
        return redirect()->route('tratamientoPaciente', $paciente->id);
    }

    //funcion para modificar el campo vacio de la evolucion del paciente seleccionado - Vista especialista
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

    //funcion para editar el tratamiento del paciente seleccionado - Vista especialista
    public function tratamientoPaciente($id){
        $paciente = Paciente::find($id);
        return view("vistaespecialista.tratamientos",['paciente'=>$paciente]);
    }

    //funcion para ver los tratamientos del paciente seleccionado - Vista especialista
    public function evolucionPaciente($id){
        $paciente = Paciente::find($id);
        return view("vistaespecialista.evolucion",['paciente'=>$paciente]);
    }

    //funcion para crear un nuevo paciente - Vista Secretaria
    public function nuevoPaciente(Request $request){
        $entrada = $request->all();
        $paciente = new Paciente($request->input());
        $paciente->save();
        $citas = Cita::all();
        $pacientes = Paciente::all();
        $especialistas = Especialista::all();
        return view("vistasecretaria.listadogeneral",['citas'=>$citas, 'pacientes'=>$pacientes, 'especialistas'=>$especialistas]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('vistasecretaria.datospersonales', ["paciente"=>$paciente]);
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
        $paciente->fill($request->input())->saveOrFail();
        return redirect()->route('listadogeneral');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        $msj = "Paciente eliminado";
        return $msj;
    }
}
