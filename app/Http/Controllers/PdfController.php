<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Models\Pedido;
use App\Models\Sede;

 

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
}
