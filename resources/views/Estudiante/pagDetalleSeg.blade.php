@extends('pagPlantilla')

@section('titulo')
    <h1> Página detalle </h1>
@endsection

@section('seccion')
    <h3> Detalles de Seguimiento de Estudiante </h1>
    <p> Id:                    {{ $xDetAlumnosSeg->id }} </p>
    <p> Código de Estudiante:      {{ $xDetAlumnosSeg->codEst }} </p>
    <p> Trabajo:               {{ $xDetAlumnosSeg->traAct }} </p>
    <p> Oficio Actual:         {{ $xDetAlumnosSeg->ofiAct }} </p>
    <p> Satisfacción:          {{ $xDetAlumnosSeg->satEst }} </p>
    <p> Fecha de Encuesta:        {{ $xDetAlumnosSeg->fecSeg }} </p>
    <p> Estado de Seguimiento: {{ $xDetAlumnosSeg->estSeg }} </p>
@endsection