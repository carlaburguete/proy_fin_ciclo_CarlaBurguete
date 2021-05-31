<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Especialista;
use App\Models\Paciente;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::All();
        $pacientes = Paciente::All();
        return view("vista_paciente.citaspersonales",['pacientes'=>$pacientes, 'citas'=>$citas]);
    }

    public function historico(){
        $citas = Cita::All();
        $citasPendientes = [];
        $contador = 0;
        foreach ($citas as $citaNueva){
            if($citaNueva->pendiente){
                $citasPendientes[$contador] = $citaNueva;
                $contador++;
            }
        }
        $pacientes = Paciente::All();
        return view("vista_paciente.historicopersonal",['pacientes'=>$pacientes, 'citas'=>$citasPendientes]);
    }

    public function secretarioCitasPaciente($id){
        $paciente = Paciente::find($id);
        $citas = Cita::All();
        $citasPendientes = [];
        $contador = 0;
        foreach ($citas as $citaNueva){
            if($citaNueva->pendiente){
                $citasPendientes[$contador] = $citaNueva;
                $contador++;
            }
        }
        return view("vistasecretaria.citaspaciente",['citas'=>$citasPendientes, 'paciente'=>$paciente]);
    }

    public function secretarioHistoricoGeneral(){
        $citas = Cita::All();
        $pacientes = Paciente::All();
        $especialistas = Especialista::All();
        return view("vistasecretaria.historicocitas",['pacientes'=>$pacientes, 'citas'=>$citas, 'especialistas'=>$especialistas]);
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
    public static function store(Request $request)
    {
        $entrada = $request->all();
        $cita = new Cita($request->input());
        $cita->save();
        $citas = Cita::all();
        $pacientes = Paciente::all();
        return view("vista_paciente.historicopersonal",['citas'=>$citas, 'pacientes'=>$pacientes]);
    }

    public function mostrarPaginaAgenda($id){
        $paciente = Paciente::find($id);
        $citas = Cita::all();
        return view("vistasecretaria.agendarcita", ['citas'=>$citas, 'paciente'=>$paciente]);
    }

    public function modificarCita(Request $request)
    {
        $entrada = $request->all();
        $citas = Cita::all();
        $cita = Cita::find($entrada['id']);
        $cita->fill([
            'pendiente' => true
        ]);
        $cita->save();

        return redirect()->route("citaspersonales.historico");
    }

    public function reservarCita(Request $request)
    {
        $entrada = $request->all();
        $citas = Cita::all();
        $cita = Cita::find($entrada['id']);
        $cita->fill([
            'pendiente' => true
        ]);
        $cita->save();

        return redirect()->route("citaspaciente", $entrada['pacienteElegido']);
    }

    public function eliminarCita(Request $request)
    {
        $entrada = $request->all();
        $citas = Cita::all();
        $cita = Cita::find($entrada['id']);
        $cita->fill([
            'pendiente' => false
        ]);
        $cita->save();

        return redirect()->route("citaspersonales.historico");
    }

    public function eliminarCitaSecretaria(Request $request)
    {
        $entrada = $request->all();
        $citas = Cita::all();
        $cita = Cita::find($entrada['id']);
        $cita->fill([
            'pendiente' => false
        ]);
        $cita->save();

        return redirect()->route("citaspaciente", $entrada['pacienteElegido']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
    }
}
