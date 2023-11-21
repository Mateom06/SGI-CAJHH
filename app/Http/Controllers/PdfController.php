<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Models\Pedido;
use App\Models\Sede;
use App\Models\Usuario;
use App\Models\Inventario;

 

class PdfController extends Controller
{
    public function imprimirpedidos(Request $request)
    {
    $ped=Pedido::orderBy('id','ASC')->get();
    $pdf=PDF::loadView('pdf.pedidosPDF',['pedido' => $ped ]);
    $pdf->setPaper('carta', 'A4');
    return $pdf->stream();
    }

    public function imprimirsedes(Request $request)
    {
    $sed=Sede::orderBy('id','ASC')->get();
    $pdf=PDF::loadView('pdf.sedePDF',['sede' => $sed ]);
    $pdf->setPaper('carta', 'A4');
    return $pdf->stream();
    }

    public function imprimirusuarios(Request $request)
    {
    $usu=Usuario::orderBy('id','ASC')->get();
    $pdf=PDF::loadView('pdf.usuariosPDF',['usuario' => $usu ]);
    $pdf->setPaper('carta', 'A4');
    return $pdf->stream();
    }

    public function imprimirinventarios(Request $request)
    {
    $inv=Inventario::orderBy('id','ASC')->get();
    $pdf=PDF::loadView('pdf.inventariosPDF',['inventario' => $inv ]);
    $pdf->setPaper('carta', 'A4');
    return $pdf->stream();
    }
}
