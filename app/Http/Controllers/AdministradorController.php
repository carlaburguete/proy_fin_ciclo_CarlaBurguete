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

    //funcion para devolver la lista de usuarios registrados en el sistema - Vista administrador
    public function index()
    {
        $pacientes = Paciente::All();
        $especialistas = Especialista::All();
        $secretarios = Secretario::All();
        return view("vistaadministrador.listausuarios", ['pacientes' => $pacientes, 'especialistas' => $especialistas, 'secretarios' => $secretarios]);
    }


    //funcion para validar el usuario que se conecta en el login - Vista Login
    public function validaUsuario(Request $request)
    {
        $entrada = $request->all();
        $pacientes = Paciente::All()->where('nom_usuario', 'LIKE', $entrada['nom_usuario']);;
        $secretarios = Secretario::All()->where('nom_usuario', 'LIKE', $entrada['nom_usuario']);;
        $especialistas = Especialista::All()->where('nom_usuario', 'LIKE', $entrada['nom_usuario']);;
        $administradores = Administrador::All()->where('nom_usuario', 'LIKE', $entrada['nom_usuario']);
        if (count($pacientes) != 0) {
            $tipo = "paciente";
        }
        if (count($secretarios) != 0) {
            $tipo = "secretario";
        }
        if (count($especialistas) != 0) {
            $tipo = "especialista";
        }
        if (count($administradores) != 0) {
            $tipo = "administrador";
        }

        switch ($tipo) {
            case "paciente":
                foreach ($pacientes as $paciente) {
                    if ($entrada['password'] == $paciente->password) {
                        return redirect()->route('citaspersonales.index');
                    } else {
                        return view('auth.login');
                    }
                }
                break;
            case "secretario":
                foreach ($secretarios as $secretario) {

                    if ($entrada['password'] == $secretario->password) {
                        return redirect()->route('listadogeneral');
                    } else {
                        return view('auth.login');
                    }
                }
                break;
            case "especialista":

                foreach ($especialistas as $especialista) {

                    if ($entrada['password'] == $especialista->password) {
                        return redirect()->route('listapacientes');
                    } else {
                        return view('auth.login');
                    }
                }
                break;
            case "administrador":
                foreach ($administradores as $administrador) {

                    if ($entrada['password'] == $administrador->password) {
                        return redirect()->route('listausuarios.index');
                    } else {
                        return view('auth.login');
                    }
                }
                break;
            default:
                return view('auth.login');
        }


    }

    //funcion para dar de alta un usuario en el sistema - Vista administrador
    public function crearusuario(Request $request)
    {
        $entrada = $request->all();

        if ($entrada['rol'] == 'secretario') {
            $datosSecretario = ['nom_usuario'=>$entrada['nom_usuario'], 'password'=>$entrada['password'], 'nombre'=>$entrada['nombre'], 'apellido1'=>$entrada['apellido1'], 'apellido2'=>$entrada['apellido2']];
            $secretario = Secretario::create($datosSecretario);
            $secretario->save();
        }
        if ($entrada['rol'] == 'especialista') {
            $datosEspecialista = ['nom_usuario'=>$entrada['nom_usuario'], 'password'=>$entrada['password'], 'nombre'=>$entrada['nombre'], 'apellido1'=>$entrada['apellido1'], 'apellido2'=>$entrada['apellido2']];
            $especialista = Especialista::create($datosEspecialista);
            $especialista->save();
        }

        return redirect()->route('listausuarios.index');
    }

}
