<?php

namespace App\Http\Controllers;

use App\Models\Especialista;
use Illuminate\Http\Request;

class EspecialistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function eliminarEspecialista(){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especialista  $especialista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especialista $especialista)
    {
        $especialista->delete();
        $msj = "Especialista eliminado";
        return $msj;
    }
}
