<?php

namespace App\Http\Controllers;

use App\Models\Secretario;
use Illuminate\Http\Request;

class SecretarioController extends Controller
{

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretario  $secretario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secretario $secretario)
    {
        $secretario->delete();
        $msj = "Secretario eliminado";
        return $msj;
    }
}
