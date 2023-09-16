<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class FormularioController extends Controller
{
    // - QUIMICA

    public function quimica()    {
        return view('boletas.quimica');
    }

    public function pdfquimica(Request $request) {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-quimica', $data);

        // Guarda el PDF en la carpeta storage/app/public
        //$pdf->save(storage_path('app/public/formulari.pdf'));
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

    // -HEMOGRAMA PARA NIÑOS

    public function hemninos()    {
        return view('boletas.hem-ninos');
    }

    public function pdfhemninos(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-hem-ninos', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

    // - HEMOGRAMA Y QUIMICA

    public function hemquimica()    {
        return view('boletas.hem-quimica');
    }

    public function pdfhemquimica(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-hem-quimica', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

    // - UROCULTIVO POSITIVO

    public function urocultivopos()    {
        return view('boletas.urocultivo-pos');
    }

    public function pdfurocultivopos(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-urocultivo-pos', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }
    
    // - UROCULTIVO NEGATIVO

    public function urocultivoneg()    {
        return view('boletas.urocultivo-neg');
    }

    public function pdfurocultivoneg(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-urocultivo-neg', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }
    
     // - TIPEO SANGUINEO

    public function tiposan()    {
        return view('boletas.tipeo-sanguineo');
    }

    public function pdftiposan(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-tipeo-sanguineo', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

     // - TARJETA DE TIPEO SANGUINEO

     public function tartiposan()    {
        return view('boletas.tar-tipeo-san');
    }

    public function pdftartiposan(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-tar-tipeo-sanguineo', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

     // - HDL - LDL

     public function hdlldl()    {
        return view('boletas.hdl-ldl');
    }

    public function pdfhdlldl(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-hdl-ldl', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

    // - HDL - LDL

    public function vih()    {
        return view('boletas.vih');
    }

    public function pdfvih(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-vih', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

      // - HB GLICOSILADA

      public function hbglico()    {
        return view('boletas.hbglico');
    }

    public function pdfhbglico(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-hbglico', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

    // - ORINA GENERAL 

    public function orina()    {
        return view('boletas.orina');
    }

    public function pdforina(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-orina', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

    // - HECES GENERAL 

    public function heces()    {
        return view('boletas.heces');
    }

    public function pdfheces(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-heces', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

      // - coprocultivo

      public function coprocultivo()    {
        return view('boletas.coprocultivo');
    }

    public function pdfcoprocultivo(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-coprocultivo', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

     // - urocultivo positivo intermedio

     public function uroposinter()    {
        return view('boletas.uro-positivo-inter');
    }

    public function pdfuroposinter(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-uroposinter', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }
  

    // VDRL - RPR

     public function vdrlrpr()    {
        return view('boletas.vdrl-rpr');
    }

    public function pdfvdrlrpr(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-vdrl-rpr', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

    // VITAMINA D

    public function vitaminad()    {
        return view('boletas.vitamina-d');
    }

    public function pdfvitaminad(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-vitamina-d', $data);
        
        return $pdf->stream($data['nombre'] . '.pdf');
    }

    // KOH

    public function koh()    {
        return view('boletas.koh');
    }

    public function pdfkoh(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-koh', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }

    // TOXOPLASMA GONDII IgM - IgG

    public function toxo()    {
        return view('boletas.toxo');
    }

    public function pdftoxo(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-toxo', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }

     // Tiroides

     public function tiroides()    {
        return view('boletas.tiroides');
    }

    public function pdftiroides(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-tiroides', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }

    // HT - HB

    public function hthb()    {
        return view('boletas.ht-hb');
    }

    public function pdfhthb(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-ht-hb', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }
  
    //PSA

    public function psa()    {
        return view('boletas.psa');
    }

    public function pdfpsa(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-psa', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }

    //PES

    public function pes()    {
        return view('boletas.pes');
    }

    public function pdfpes(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-pes', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }

     //  H. PYLORI EN SANGRE

     public function pylorisan()    {
        return view('boletas.pylorisan');
    }

    public function pdfpylorisan(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-pylorisan', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }

     //  H. PYLORI EN HECES

     public function pylorihec()    {
        return view('boletas.pylorihec');
    }

    public function pdfpylorihec(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-pylorihec', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }

     //  GOTA GRUESA

     public function gotagruesa()    {
        return view('boletas.gotagruesa');
    }

    public function pdfgotagruesa(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-gotagruesa', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }

    //  FILTRADO GLOMERULAR

    public function filglomerular()    {
        return view('boletas.fil-glomerular');
    }

    public function pdffilglomerular(Request $request)    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.tem-filglomerular', $data);
        
        return $pdf->stream($data['nombre'].'.pdf');
    }
  
}