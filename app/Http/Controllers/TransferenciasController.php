<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transferencia;
use stdClass;

class TransferenciasController extends Controller
{
    public function almacenarTransferencia($enviadoPor, $recibidoPor, $observaciones, $item){
        $insertar = new stdClass;
        $insertar->EnviadoPor = $enviadoPor;
        $insertar->RecibidoPor = $recibidoPor;
        $insertar->Observaciones = $observaciones;
        $insertar->Item = $item;
        Transferencia::insert($insertar);
    }
}
