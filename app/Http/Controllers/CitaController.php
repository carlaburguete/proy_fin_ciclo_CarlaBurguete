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

    //funcion para ver las citas personales de un paciente - Vista paciente
    public function index()
    {
        $citas = Cita::All();
        $pacientes = Paciente::All();
        return view("vista_paciente.citaspersonales", ['pacientes' => $pacientes, 'citas' => $citas]);
    }

    //funcion para ver el historico personal del paciente que se conecta - Vista paciente
    public function historico()
    {
        $citas = Cita::All();
        $citasPendientes = [];
        $contador = 0;
        foreach ($citas as $citaNueva) {
            if ($citaNueva->pendiente) {
                $citasPendientes[$contador] = $citaNueva;
                $contador++;
            }
        }
        $pacientes = Paciente::All();
        return view("vista_paciente.historicopersonal", ['pacientes' => $pacientes, 'citas' => $citasPendientes]);
    }

    //funcion para ver las citas de un paciente seleccionado - Vista secretaria
    public function secretarioCitasPaciente($id)
    {
        $paciente = Paciente::find($id);
        $citas = Cita::All();
        $citasPendientes = [];
        $contador = 0;
        foreach ($citas as $citaNueva) {
            if ($citaNueva->pendiente) {
                $citasPendientes[$contador] = $citaNueva;
                $contador++;
            }
        }
        return view("vistasecretaria.citaspaciente", ['citas' => $citasPendientes, 'paciente' => $paciente]);
    }

    //funcion para ver el historico general de citas del gabinete - Vista secretaria
    public function secretarioHistoricoGeneral()
    {
        $citas = Cita::All();
        $pacientes = Paciente::All();
        $especialistas = Especialista::All();
        return view("vistasecretaria.historicocitas", ['pacientes' => $pacientes, 'citas' => $citas, 'especialistas' => $especialistas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    //funcion para crear una cita nueva y guardarla en el historico personal de un paciente - Vista paciente
    public static function store(Request $request)
    {
        $entrada = $request->all();
        $cita = new Cita($request->input());
        $cita->save();
        $citas = Cita::all();
        $pacientes = Paciente::all();
        return view("vista_paciente.historicopersonal", ['citas' => $citas, 'pacientes' => $pacientes]);
    }

    //funcion para agendar una cita para un paciente seleccionado - Vista secretaria
    public function mostrarPaginaAgenda($id)
    {
        $paciente = Paciente::find($id);
        $citas = Cita::all();
        return view("vistasecretaria.agendarcita", ['citas' => $citas, 'paciente' => $paciente]);
    }

    //funcion para modificar una cita y que este pendiente - Vista Paciente
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

    //funcion para reservar una cita - Vista paciente
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

    //funcion para eliminar una cita cambiando su valor y volver al historico - Vista paciente
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

    //funcion para eliminar una cita cambiando su valor y volver al historico - Vista secretaria
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

}
