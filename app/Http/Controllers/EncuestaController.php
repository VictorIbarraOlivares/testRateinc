<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Respuesta;
use Auth;

class EncuestaController extends Controller
{
    public function encuesta()
    {
    	return view('encuesta');
    }

    public function respuesta(Request $request)
    {
    	
    	$newRespuesta = new Respuesta();
    	$newRespuesta->evaluacion = $request->input('respuesta');
    	$newRespuesta->respuesta = $request->input('textoRespuesta');
    	if (!Auth::guest()) {
    		$newRespuesta->id_usuario = Auth::user()->id;	
    	}
    	$newRespuesta->save();
    	return redirect('/encuesta');
    }

    public function informe()
    {
    	return view('informe');
    }
}
