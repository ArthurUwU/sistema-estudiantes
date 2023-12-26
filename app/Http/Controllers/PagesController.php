<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Seguimiento;
//use App\Models\Curso;

class PagesController extends Controller
{ 
    /*
     //CREATE
    public function fnRegistrarCurso (Request $request) {
        
        //return $request;        //Verificando "token" y datos recibidos
        
        $request -> validate([
            'nomEst'=>'required',
            'apeEst'=>'required',
            'fnaEst'=>'required',
            'turMat'=>'required',
            'semMat'=>'required',
            'estMat'=>'required'
        ]);
 
        $nuevoEstudiante = new Estudiante;

        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;

        $nuevoEstudiante->save();   //Guardar en BD
        
        //$xAlumnos = Estudiante::all();                  //Datos de BD
        //return view('pagLista', compact('xAlumnos'));   //Carga página
        return back()->with('msj', 'Se registro con éxito...');
    }
    */

    //READ
    public function fnListaCurso () {
        //$xAlumnos = Estudiante::all();
        $xAlumnos = Estudiante::paginate(4);
        return view('pagLista', compact('xAlumnos'));
    }

    /*
    public function fnEstDetalleCurso($id) {
        $xDetAlumnos = Estudiante::findOrFail($id); 
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }
    //UPDATE
    public function fnEstActualizarCurso ($id) {                 //ACTUALIZAR. PASO 1/2
        $xActAlumnos = Estudiante::findOrFail($id); 
        return view('Estudiante.pagActualizar', compact('xActAlumnos'));
    }
    public function fnUpdateCurso (Request $request, $id) {      //ACTUALIZAR. PASO 2/2
        
        //return $request;        //Verificando "token" y datos recibidos
        $xUpdateAlumnos = Estudiante::findOrFail($id);
        
        $xUpdateAlumnos->nomEst = $request->nomEst;
        $xUpdateAlumnos->apeEst = $request->apeEst;
        $xUpdateAlumnos->fnaEst = $request->fnaEst;
        $xUpdateAlumnos->turMat = $request->turMat;
        $xUpdateAlumnos->semMat = $request->semMat;
        $xUpdateAlumnos->estMat = $request->estMat;

        $xUpdateAlumnos->save();   //Guardar en BD
        
        //$xAlumnos = Estudiante::all();                  //Datos de BD
        //return view('pagLista', compact('xAlumnos'));   //Carga página
        return back()->with('msj', 'Se registro con éxito...');
    }
    //DELETE
    public function fnEliminarCurso ($id) {
        $deleteAlumno = Estudiante::findOrFail($id);
        $deleteAlumno->delete();
        return back()->with('msj', 'Se eliminó con éxito...');
    }
    */
    
     
    //CREATE
    public function fnRegistrarSeguimiento (Request $request) {
            
        //return $request;        //Verificando "token" y datos recibidos
        
        $request -> validate([
            
            'traAct'=>'required',
            'ofiAct'=>'required',
            'satEst'=>'required',
            'fecSeg'=>'required',
            'estSeg'=>'required'
        ]);
        
        $nuevoSeguimiento = new Seguimiento;

       
        
        $nuevoSeguimiento->traAct = $request->traAct;
        $nuevoSeguimiento->ofiAct = $request->ofiAct;
        $nuevoSeguimiento->satEst = $request->satEst;
        $nuevoSeguimiento->fecSeg = $request->fecSeg;
        $nuevoSeguimiento->estSeg = $request->estSeg;

        $nuevoSeguimiento->save();   //Guardar en BD
        
        //$xAlumnos = Estudiante::all();                  //Datos de BD
        //return view('pagLista', compact('xAlumnos'));   //Carga página
        return back()->with('msj', 'Se registro con éxito en SEGUIMIENTO...');
    }
    //READ
    public function fnListaSeguimiento () {
        $xAlumnos = Estudiante::all();

        $numOrden = 1;
        $xAlumnosSeguimiento = Seguimiento::paginate(4);
        return view('pagListaSeguimiento', compact('xAlumnosSeguimiento', 'numOrden', 'xAlumnos'));
    }
    public function fnEstDetalleSeg($id) {
        $xDetAlumnosSeg = Seguimiento::findOrFail($id); 
        return view('Estudiante.pagDetalleSeg', compact('xDetAlumnosSeg'));
    }
    //UPDATE
    public function fnEstActualizarSeg ($id) {                 //ACTUALIZAR. PASO 1/2
        $xActAlumnosSeg = Seguimiento::findOrFail($id); 
        return view('Estudiante.pagActualizarSeg', compact('xActAlumnosSeg'));
    }
    public function fnUpdateSeg (Request $request, $id) {      //ACTUALIZAR. PASO 2/2
        
        //return $request;        //Verificando "token" y datos recibidos
        $xUpdateSeguimiento = Seguimiento::findOrFail($id);
        
        $xUpdateSeguimiento->traAct = $request->traAct;
        $xUpdateSeguimiento->ofiAct = $request->ofiAct;
        $xUpdateSeguimiento->satEst = $request->satEst;
        $xUpdateSeguimiento->fecSeg = $request->fecSeg;
        $xUpdateSeguimiento->estSeg = $request->estSeg;
        
        $xUpdateSeguimiento->save();   //Guardar en BD
        
        //$xAlumnos = Estudiante::all();                  //Datos de BD
        //return view('pagLista', compact('xAlumnos'));   //Carga página
        return back()->with('msj', 'Se ACTUALIZO con éxito el SEGUIMIENTO...');
    }
    //DELETE
    public function fnEliminarSeg ($id) {
        $deleteAlumno = Seguimiento::findOrFail($id);
        $deleteAlumno->delete();
        return back()->with('msj', 'Se eliminó con éxito el SEGUIMIENTO...');
    }





    //PORTADA
    public function fnIndex () {
        return view('welcome');
    } 

    //CREATE
    public function fnRegistrar (Request $request) {
        
        //return $request;        //Verificando "token" y datos recibidos
        
        $request -> validate([
            'codEst'=>'required',
            'nomEst'=>'required',
            'apeEst'=>'required',
            'fnaEst'=>'required',
            'turMat'=>'required',
            'semMat'=>'required',
            'estMat'=>'required'
        ]);
 
        $nuevoEstudiante = new Estudiante;

        $nuevoEstudiante->codEst = $request->codEst;
        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;

        $nuevoEstudiante->save();   //Guardar en BD
        
        //$xAlumnos = Estudiante::all();                  //Datos de BD
        //return view('pagLista', compact('xAlumnos'));   //Carga página
        return back()->with('msj', 'Se registro con éxito...');
    }
    //READ
    public function fnLista () {
        //$xAlumnos = Estudiante::all();
        $xAlumnos = Estudiante::paginate(4);
        return view('pagLista', compact('xAlumnos'));
    }
    public function fnEstDetalle($id) {
        $xDetAlumnos = Estudiante::findOrFail($id); 
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }
    //UPDATE
    public function fnEstActualizar ($id) {                 //ACTUALIZAR. PASO 1/2
        $xActAlumnos = Estudiante::findOrFail($id); 
        return view('Estudiante.pagActualizar', compact('xActAlumnos'));
    }
    public function fnUpdate (Request $request, $id) {      //ACTUALIZAR. PASO 2/2
        
        //return $request;        //Verificando "token" y datos recibidos
        $xUpdateAlumnos = Estudiante::findOrFail($id);
        
        $xUpdateAlumnos->codEst = $request->codEst;
        $xUpdateAlumnos->nomEst = $request->nomEst;
        $xUpdateAlumnos->apeEst = $request->apeEst;
        $xUpdateAlumnos->fnaEst = $request->fnaEst;
        $xUpdateAlumnos->turMat = $request->turMat;
        $xUpdateAlumnos->semMat = $request->semMat;
        $xUpdateAlumnos->estMat = $request->estMat;

        $xUpdateAlumnos->save();   //Guardar en BD
        
        //$xAlumnos = Estudiante::all();                  //Datos de BD
        //return view('pagLista', compact('xAlumnos'));   //Carga página
        return back()->with('msj', 'Se registro con éxito...');
    }
    //DELETE
    public function fnEliminar ($id) {
        $deleteAlumno = Estudiante::findOrFail($id);
        $deleteAlumno->delete();
        return back()->with('msj', 'Se eliminó con éxito...');
    }
    
    //Ejemplo de ruta con validación
    public function fnGaleria ($numero=null) {
        $valor = $numero;
        $otro  = 21;

        //return view('pagGaleria', ['valor'=>$numero, 'otro'=>25]);
        return view('pagGaleria', compact('valor', 'otro'));
    }
}
